<?php

namespace App\Commands;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class StoreImageFullCommand
{

    /**
     * @param UploadedFile $image
     * @param string $image_file_ext
     * @return bool|string
     */
    public function store(UploadedFile $image, string $image_file_name, string $image_file_ext) : bool|string
    {
        $image_content =  file_get_contents($image->getRealPath());
        if ($image_content === false) return false;

        //$file_path = "process/images/$image_file_name.$image_file_ext";
        $file_path = "$image_file_name.$image_file_ext";

        if (Storage::disk('public')->put($file_path, $image_content)) {
            return $file_path;
        } else {
            return false;
        }
    }

}
