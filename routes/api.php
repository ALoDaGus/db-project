<?php

use App\Http\Controllers\DormitoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/create/member', [DormitoryController::class, 'create_member']);
Route::post('/create/member_detail', [DormitoryController::class, 'create_member_detail']);
Route::post('/create/room', [DormitoryController::class, 'create_room']);
Route::post('/create/bill', [DormitoryController::class, 'create_bill']);
Route::post('/create/booking', [DormitoryController::class, 'create_booking']);
Route::delete('/member/{id}', [DormitoryController::class, 'member_destroy'])->name('member.destroy');
Route::post('/edit/{id}', [DormitoryController::class, 'edit_data'])->name('edit');