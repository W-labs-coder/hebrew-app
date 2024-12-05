<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainingController extends Controller
{
    public function index()
    {
        $fakeUser = User::factory()->make([
            'name' => 'Emmanuel',
            'email' => 'emmy@gmail.com',
        ]);

        // Log the user in
        Auth::login($fakeUser);
        $data = ['active' => 'training'];
        return view('pages.dashboard.training.index', $data);
    }
}
