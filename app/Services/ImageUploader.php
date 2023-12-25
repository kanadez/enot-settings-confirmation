<?php

namespace App\Services;

use App\Commands\StoreImageFullCommand;
use App\Commands\StoreImagePreviewCommand;
use App\Exceptions\Auth\AuthException;
use App\Models\User;
use App\Models\Position;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Services\FunctionResult as Result;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Storage;

class ImageUploader
{

    /**
     * @var StoreImageFullCommand
     */
    protected $storeFullCmd;

    /**
     * @var StoreImagePreviewCommand
     */
    protected $storePrevCmd;

    /**
     * @param StoreImageFullCommand $storeFullCmd
     * @param StoreImagePreviewCommand $storePrevCmd
     */
    public function __construct(
        StoreImageFullCommand $storeFullCmd,
        StoreImagePreviewCommand $storePrevCmd
    )
    {
        $this->storeFullCmd = $storeFullCmd;
        $this->storePrevCmd = $storePrevCmd;
    }

    /**
     * @param array $images
     * @return FunctionResult
     */
    public function store(array $images): Result
    {
        $stored_image_path = [];

        foreach ($images as $image) {
            $image_rand_name = time().uniqid(rand());
            $full_file_path = $this->storeFullCmd->store($image, $image_rand_name, $this->getImageExt($image));
            $prev_file_path = $this->storePrevCmd->store($image, $image_rand_name, $this->getImageExt($image));

            if ($full_file_path === false || $prev_file_path === false) {
                Result::error(Lang::get('errors.not_all_images_were_uploaded')); // TODO вывести юзеру
            } else {
                $stored_image_path = [
                    'image_path'    => $full_file_path,
                    'preview_path'  => $prev_file_path,
                ];
            }
        }

        return Result::success($stored_image_path);
    }


    /**
     * @param UploadedFile $image
     * @return string
     */
    private function getImageExt(UploadedFile $image)
    {
        $image_file_ext= 'jpg';

        switch ($image->getMimeType()) {
            case 'image/png':
                $image_file_ext = 'png';
                break;
            case 'image/jpeg':
                $image_file_ext = 'jpg';
                break;
        }

        return $image_file_ext;
    }

}
