<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class RegisterController extends Controller
{

    /**
     * @var UserService
     */
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    protected function success(int $status = 200) : JsonResponse {
        return new JsonResponse([
            'status' => 'success'
        ], $status);
    }

    public function register(RegisterRequest $request) {
        $user = $this->userService->createUser(
            $request->input('name'),
            $request->input('email'),
            $request->input('password'),
            $request->input('telegram'),
            $request->input('phone'),
        );

        return $this->success();
    }

}
