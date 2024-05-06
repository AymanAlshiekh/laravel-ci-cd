<?php

use App\Http\Controllers\WhatsAppController;
use Illuminate\Support\Facades\Route;

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

Route::get('/send_whatsapp', [WhatsAppController::class, 'send_whatsapp']);
Route::get('/', function () {
    // https://popupsmart.com/free-chat-popup/#free-chat-popup-builder
    return view('welcome');
});
