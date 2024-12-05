<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index(){
        $type = request()->type ?? 'monthly';
        $subscriptions = Subscription::where('duration', $type)->get();
        $data = ['active' => 'subscription', 'subscriptions' => $subscriptions, 'type' => $type];
        return view('pages.guest.subscription.index', $data);
    }
}
