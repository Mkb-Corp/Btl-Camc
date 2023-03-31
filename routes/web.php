<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\PaymentRequestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FileController::class, 'index'])->name('all_files');
Route::post('/create_file', [FileController::class, 'create'])->name('file.create');
Route::get('/payment_request', [PaymentRequestController::class, 'index'])->name('payment_request');
Route::POST('/payment_request', [PaymentRequestController::class, 'create'])->name('payment_request.create');
Route::get('/submitted_files', [FileController::class, 'submitted'])->name('payment_requests.submitted');
Route::post('/validate_payment', [PaymentRequestController::class, 'payment_validation'])->name('payment_validation');
Route::get('/payments_state', [FileController::class, 'payments_state'])->name('payment_requests.state');
