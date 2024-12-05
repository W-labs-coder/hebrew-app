<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function transactionCancellation()
    {
        $fakeUser = User::factory()->make([
            'name' => 'Emmanuel',
            'email' => 'emmy@gmail.com',
        ]);

        // Log the user in
        Auth::login($fakeUser);
        $data = ['active' => 'transaction-cancellation'];
        return view('pages.dashboard.orders.transaction-cancellation', $data);
    }
}
