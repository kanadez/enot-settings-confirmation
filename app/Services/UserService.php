<?php

namespace App\Services;

use App\Exceptions\Auth\AuthException;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Filters\Users\UsersFilter;
use phpDocumentor\Reflection\Types\Object_;

class UserService
{


    public function __construct()
    {

    }

    public function getUser(int $id): User
    {
        $user = User::select()->find($id);

        return $user;
    }

    public function createUser(string $name, string $email, string $password, string $telegram, string $phone) : User {
        return User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'telegram' => $telegram,
            'phone' => $phone,
        ]);
    }

    public function login(string $email, string $password) : User {
        $user = User::whereEmail($email)->first();

        if (!$user) {
            throw new AuthException('User not found!');
        }

        if (!Hash::check($password, $user->password)) {
            throw new AuthException('Invalid credentials!');
        }

        return $user;
    }

    public function verify(User $user) : void {
        $user->markEmailAsVerified();
    }

    public function createToken(User $user) : string {
        return $user->createToken('default')->plainTextToken;
    }

    public function refreshToken(User $user) : string {
        $this->revokeToken($user);
        return $this->createToken($user);
    }

    public function revokeToken(User $user) : void {
        $user->tokens()->where('name', 'default')->delete();
    }

    public function revokeCurrentToken(User $user) {
        $user->currentAccessToken()->delete();
    }
}
