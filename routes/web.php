<?php

use App\Http\Controllers\DormitoryController;
use App\Http\Controllers\HomeController;
use App\Models\Member;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    return view('auth/login');
});


Route::get('home', [HomeController::class, 'index'])->name('home');

// Route::post('insert', [DormitoryController::class, 'store']);
// Route::post('insert',[DormitoryController::class, 'store'], ['middleware'=>'islogedin']);

// Route::get('editdata/{id}', ['middleware'=>'islogedin', function()
// {
//     return redirect()->action([DormitoryController::class, 'edit_data']);
// }]);
Route::get('editdata/{id}', [DormitoryController::class, 'edit_data'], ['middleware'=>'islogedin']);

Route::post('insert', [DormitoryController::class, 'store'], ['middleware'=>'islogedin', function(){
    // return redirect('home');
}]);

Route::post('update/{id}', [DormitoryController::class, 'update'], ['middleware'=>'islogedin', function(){
    
}]);

Route::get('member', ['middleware'=>'islogedin', function(){
    $mem = DB::table('member')->get();
    return view('member', ['member' => $mem]);
}]);

Route::get('member_detail', ['middleware'=>'islogedin', function(){
    $mem = DB::table('member_detail')->get();
    return view('member_detail', ['member_detail' => $mem]);
}]);

Route::get('booking', ['middleware'=>'islogedin', function(){
    $mem = DB::table('booking')->get();
    return view('booking', ['booking' => $mem]);
}]);

Route::get('room', ['middleware'=>'islogedin', function(){
    $mem = DB::table('room')->get();
    return view('room', ['room' => $mem]);
}]);

Route::get('bill', ['middleware'=>'islogedin', function(){
    $mem = DB::table('bill')->get();
    return view('bill', ['bill' => $mem]);
}]);



// Route::get('member_detail', function () {
    
//     $mem = DB::table('member_detail')->get();
    
//     return view('member_detail', ['member_detail' => $mem]);
// });


Auth::routes();