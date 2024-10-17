<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\MailController;
use App\Models\Customer;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $customers = Customer::all(); // Fetch all customers
    return view('welcome', compact('customers')); // Pass customers to the view
});

Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);


Route::get('/pdf-view', [PDFController::class, 'viewPDF']);

Route::get('/send-mail', [MailController::class, 'showForm'])->name('sendMailForm');
Route::post('/send-mail', [MailController::class, 'sendEmail'])->name('sendEmail');
