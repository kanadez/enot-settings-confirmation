<?php

namespace App\Commands;

use App\Models\SessionOutputImage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class CreateOutputImageCommand
{

    const DEFAULT_IMAGE_EXT = ".jpg";

    /**
     * @param string $session_id
     * @return SessionOutputImage
     * @throws \Throwable
     */
    public function create(string $session_id): SessionOutputImage
    {
        $new_image = new SessionOutputImage();
        $new_image->session_id = $session_id;
        $new_image->image_path = self::genRandName() . self::DEFAULT_IMAGE_EXT;
        $new_image->saveOrFail();

        return $new_image;
    }

    private static function genRandName()
    {
        return time().uniqid(rand());
    }

}
