<?php

namespace App\Http\Controllers;

use App\Models\Payments\Payout;
use App\Models\User;
use App\Services\ExchangeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class PricesController extends Controller
{
    public function index() {
        return view('prices');
    }

    public function test(Request $request) {
    }
}
