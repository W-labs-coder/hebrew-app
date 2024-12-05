<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RTLController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\FontController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\AccessibilityController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AlertsController;
use App\Http\Controllers\TrainingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('subscription.page');
});

Route::prefix('subscription')->name('subscription.')->group(function () {
    Route::get('/', [SubscriptionController::class, 'index'])->name('page');
});



Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    // rtl
    Route::prefix('rtl')->name('rtl.')->group(function () {
        Route::get('/', [RTLController::class, 'index'])->name('index');
    });

    // language
    Route::prefix('language')->name('language.')->group(function () {
        Route::get('/', [LanguageController::class, 'index'])->name('index');
    });

    // fonts
    Route::prefix('fonts')->name('fonts.')->group(function () {
        Route::get('/', [FontController::class, 'index'])->name('index');
    });

    // support
    Route::prefix('support')->name('support.')->group(function () {
        Route::get('/', [SupportController::class, 'index'])->name('index');
    });

    // accessibility
    Route::prefix('accessibility')->name('accessibility.')->group(function () {
        Route::get('/', [AccessibilityController::class, 'index'])->name('index');
    });

    // payment
    Route::prefix('payment')->name('payment.')->group(function () {
        Route::get('/', [PaymentController::class, 'index'])->name('index');
    });

    // alerts
    Route::prefix('alerts')->name('alerts.')->group(function () {
        Route::get('/', [AlertsController::class, 'index'])->name('index');
    });

    // orders
    Route::prefix('orders')->name('orders.')->group(function () {
        Route::get('/transaction-cancellation', [OrderController::class, 'transactionCancellation'])->name('transactionCancellation');
    });

    // training
    Route::prefix('training')->name('training.')->group(function () {
        Route::get('/', [TrainingController::class, 'index'])->name('index');
    });
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
