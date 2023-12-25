<?php

namespace App\Services;

use App\Commands\CreateOutputVideoCommand;
use App\Models\Session;
use App\Models\SessionInputImage;
use App\Models\SessionQueue;
use App\Commands\CreateInputImageCommand;
use App\Commands\CreateOutputImageCommand;

class SessionQueueService
{

    const SESSION_LIFETIME = 525600; // 1 год
    const SESSION_ID_BYTES_LEN = 20;
    const NEW_STATUS = 'new';
    const PENDING_STATUS = 'pending';
    const SUCCESS_STATUS = 'success';
    const FAILED_STATUS = 'failed';

    /**
     * @var CreateInputImageCommand
     */
    private $createInputImgCmd;

    /**
     * @var CreateOutputImageCommand
     */
    private $createOutputImgCmd;

    /**
     * @var CreateOutputVideoCommand
     */
    private $createOutputVidCmd;

    public function __construct(
        CreateInputImageCommand $createInputImgCmd,
        CreateOutputImageCommand $createOutputImgCmd,
        CreateOutputVideoCommand $createOutputVidCmd)
    {
        $this->createInputImgCmd = $createInputImgCmd;
        $this->createOutputImgCmd = $createOutputImgCmd;
        $this->createOutputVidCmd = $createOutputVidCmd;
    }

    /**
     * @param Session $session
     * @param string $input_image_path
     * @return void
     * @throws \Throwable
     */
    public function pushSessionToQueue(Session $session, string $input_image_path): SessionQueue
    {
        $input_image = $this->createInputImgCmd->create($session->id, $input_image_path);
        $output_image = $this->createOutputImgCmd->create($session->id);
        $output_video = $this->createOutputVidCmd->create($session->id);

        $new_queue = new SessionQueue();
        $new_queue->session_id = $session->id;
        $new_queue->status = self::NEW_STATUS;
        $new_queue->input_image_id = $input_image->id;
        $new_queue->output_image_id = $output_image->id;
        $new_queue->output_video_id = $output_video->id;
        $new_queue->saveOrFail();

        return $new_queue;
    }

    public function getSessionFromQueue(Session $session): SessionQueue
    {
        $session_queue = SessionQueue::select()
                            ->where('session_id', $session->id)
                            ->orderBy('created_at', 'desc')
                            ->firstOrFail();

        return $session_queue;
    }
}
