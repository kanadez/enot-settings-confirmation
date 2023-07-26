<?php

namespace App\Http\Controllers;

use App\Models\Payments\Payout;
use App\Models\User;
use App\Services\ExchangeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AppController extends Controller
{
    public function index() {
        return view('cyberzilla');
    }

    public function test(Request $request) {
    }
}
