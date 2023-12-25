<?php

namespace App\Commands;

use App\Models\SessionOutputVideo;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class CreateOutputVideoCommand
{

    const DEFAULT_VIDEO_EXT = ".mp4";

    /**
     * @param string $session_id
     * @return SessionOutputVideo
     * @throws \Throwable
     */
    public function create(string $session_id): SessionOutputVideo
    {
        $new_video = new SessionOutputVideo();
        $new_video->session_id = $session_id;
        $new_video->video_path = self::genRandName() . self::DEFAULT_VIDEO_EXT;
        $new_video->saveOrFail();

        return $new_video;
    }

    private static function genRandName()
    {
        return time().uniqid(rand());
    }

}
