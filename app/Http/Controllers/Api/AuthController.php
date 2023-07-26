<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    protected function success(User $user, string $token, int $status = 200) : JsonResponse {
        return new JsonResponse([
            'user' => $user->toAuth(),
            'token' => $token,
        ], $status);
    }

    public function login(LoginRequest $request) {
        $user = $this->userService->login($request->input('email'), $request->input('password'));
        $token = $this->userService->createToken($user);

        return $this->success($user, $token);
    }

    public function user(Request $request) : JsonResponse {
        $token = Str::startsWith($request->header("Authorization"), 'Bearer ')
            ? Str::substr($request->header("Authorization"), 7) : null;

        return $this->success($request->user(), $token);
    }

    public function logout() {
        $this->userService->revokeCurrentToken(auth()->user());
        return new JsonResponse([],Response::HTTP_OK);
    }
}
