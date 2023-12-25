<?php

namespace App\Commands;

use App\Models\SessionInputImage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class CreateInputImageCommand
{

    /**
     * @param string $session_id
     * @param string $image_path
     * @return SessionInputImage
     * @throws \Throwable
     */
    public function create(string $session_id, string $image_path): SessionInputImage
    {
        $new_image = new SessionInputImage();
        $new_image->session_id = $session_id;
        $new_image->image_path = $image_path;
        $new_image->saveOrFail();

        return $new_image;
    }

}
