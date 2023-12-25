<?php

namespace App\Commands;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class StoreImagePreviewCommand
{

    const PREVIEW_HEIGHT = 80;
    const PREVIEW_WIDTH = 80;

    /**
     * @param UploadedFile $image
     * @param string $image_file_ext
     * @return bool|string
     */
    public function store(UploadedFile $image, string $image_file_name, string $image_file_ext) : bool|string
    {
        $image_content =  file_get_contents($image->getRealPath());
        if ($image_content === false) return false;

        $file_path = "process/images/{$image_file_name}_preview.{$image_file_ext}";
        $image_resized = $this->resize($image);

        if (Storage::disk('public')->put($file_path, $image_resized)) {
            return $file_path;
        } else {
            return false;
        }
    }

    /**
     * @param UploadedFile $image
     * @return string
     */
    private function resize(UploadedFile $image): string
    {
        $image_created = null;

        switch ($image->getMimeType()) {
            case 'image/png':
                $image_created = imagecreatefrompng($image->getRealPath());
                break;
            case 'image/jpeg':
                $image_created = imagecreatefromjpeg($image->getRealPath());
                break;
        }

        $ratio = self::PREVIEW_WIDTH / imagesx($image_created);
        $height = imagesy($image_created) * $ratio;
        $new_image = imagecreatetruecolor(self::PREVIEW_WIDTH, $height);
        imagecopyresampled(
            $new_image, $image_created,
            0,
            0,
            0,
            0,
            self::PREVIEW_WIDTH,
            $height,
            imagesx($image_created),
            imagesy($image_created)
        );
        $resulted_image = null;

        switch ($image->getMimeType()) {
            case 'image/png':
                ob_start();
                imagepng($new_image);
                $resulted_image = ob_get_clean();
                break;
            case 'image/jpeg':
                ob_start();
                imagejpeg($new_image);
                $resulted_image = ob_get_clean();
                break;
        }

        return $resulted_image;
    }

}
