<?php
/**
 * Created by PhpStorm.
 * User: kanadez
 * Date: 18.07.18
 * Time: 15:43
 */

namespace App\Http\Controllers\Api\Process;

use App\Http\Controllers\Controller;
use App\Models\Session;
use App\Services\ImageProcessor;
use App\Services\ImageUploader;
use App\Services\SessionService;
use App\Services\SessionQueueService;
use Illuminate\Http\Request;

class ProcessImagesController extends Controller
{

    /**
     * @var ImageUploader
     */
    private $imageUploader;

    /**
     * @var ImageProcessor
     */
    private $imageProcessor;

    /**
     * @var SessionService
     */
    private $sessionService;

    /**
     * @var SessionQueueService
     */
    private $sessionQueueService;

    public function __construct(
        ImageUploader $imageUploader,
        ImageProcessor $imageProcessor,
        SessionService $sessionService,
        SessionQueueService $sessionQueueService
    )
    {
        $this->imageUploader = $imageUploader;
        $this->imageProcessor = $imageProcessor;
        $this->sessionService = $sessionService;
        $this->sessionQueueService = $sessionQueueService;
    }

    /**
     * Обработка изображений после загрузки (отправка в нейросеть)
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $session_id = $request->cookie('_si');
        $session = Session::findOrFail($session_id);
        $session_queue = $this->sessionQueueService->getSessionFromQueue($session);
        dd($session_queue);

        // Сюда нужно выдавать несколько изображений для выбора юзера. Это невозможно при текущей структуре базы. Будем хранить только новые и обрабатываемые сессии.
        // Обработанные будем отдавать и сразу удалять, чтобы читать всегда только текущее. У сессии будет тип - image или video. На шаге аплоада будем отдавать только image.
        // 6 штук для начала. Будем отдавать по мере готовности, чтобы юзер видел хотя бы по чуть-чуть. Сразу по отдаче будем удалять. На фронте будем хранить внутренне имя
        // каждого изображения. При выборе юзером будем по имени изобр. Брать соотвест. видео-ролик и обрабатываеть его с юзерским imput-image. Сохранять в сессию с типом video.
        // По готовности отдавать юзеру и сразу удалять сессию. Видео и картинки есс-но сохраняются в таблицах и могут быть просмотрены юзером в истории. Но при обновлении страницы всё пропадает,
        // т.к. сессии уже удалены.
        // 6 изображений для обработки (наших превьюх) нужно определить заранее в отдельной таблице. и положит их самих в сторж. Брать из таблицы перед обработкой и класть в
        // таблицу сессий как processing_file_id (добавить такой столбец). При обработке видео же класть сюда id видео-файла для обработки из той же таблицы. Всё это наравне с инпут и аутпут
        // изображениями и видео в таблице очереди сессий

        $process_result = true; // TODO заменить на function result
        $processed_images = [
            env('APP_URL') . '/storage/process/images/16983130371481859761653a334d44668.jpg',
            env('APP_URL') . '/storage/process/images/16986763151076678988653fbe5b17de4.png',
            env('APP_URL') . '/storage/process/images/16986774951599697867653fc2f76fd12.png'
        ];

        if ($process_result) {
            return response()
                ->json([
                    'status' => 'success',
                    'data' => [
                        'processed_images' => $processed_images // TODO сюда выдать заглушкой 6 текущих изобар. без обарботки
                    ]
                ]);
        } else {
            return response()->json([
                'status' => 'fail',
                'error' => 'error' // TODO ошибка из резульата
            ], 422);
        }
    }

    /**
     * Загрузка изображений для послед. обработки (метод index выше)
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        $images = $request->allFiles();
        $upload_result = $this->imageUploader->store($images);

        if ($upload_result->success) {
            $success_response = response()->json(['status' => 'success']);

            if (empty($request->cookie('_si'))) {
                $session = $this->sessionService->createSession();
                $success_response->withCookie(cookie('_si', $session->id, SessionService::SESSION_LIFETIME));
            } else {
                $session_id = $request->cookie('_si');
                $session = Session::findOrFail($session_id);
            }

            $this->sessionQueueService->pushSessionToQueue($session, $upload_result->returnValue['image_path']);

            return $success_response;
        } else {
            return response()->json([
                'status' => 'fail',
                'error' => $upload_result->errorMessage
            ], 422);
        }
    }

}
