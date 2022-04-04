<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; 
use App\Http\Controllers;


//  use namespce để có thể sử dụng 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Login;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CategoryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function(){
//     return view('welcome');
// });

// Route::get('form', function(){
//     // return 'đây là phương thức get';
//     return view('form');
// });


// Route::post('form', function(){
//     return 'đây là phương thức post';
// });


// Route::match(['get', 'post'], 'form' , function(){
//     return $_SERVER['REQUEST_METHOD'];
// });

// Route::any('form',function(Request $request){
//     return $request->method();
// });

// Route::get('show-form',function(){
//     return view('form');
// });


// nghĩa là khi có url là unicode thì tự động chuyển hướng đến url là  show-form
// gồm 3 tham số : url trang bắt đầu , url trang muốn điều hướng đên , trạng thái (301 , 404 , .... reponse code)
// Route::redirect('unicode' , 'show-form');

// chỉ hỗ trợ cho phương thức get và delete
// Route::view('show-form' , 'form');

// cách 1 là thực hiện code chức năng ở tại đây
// Route::get('/', function(){
//     return view('home');
// })->name('home');
// cách 2 là thực hiện code chức năng ở File bên Controller
// Route::get('cate', 'App\Http\Controllers\CategoryController@cate');
// // cách 3 là thực hiện code chức năng ở File bên Controller
// Route::get('new/{id}', [HomeController::class, 'new']);


// Route::get('login' , [Login::class , 'index']);

// nhóm các route có tiền tố chung 
// Route::middleware('checkLogin')->prefix('admin')->group(function(){
//     Route::get('show-form' , function(){
//         return view('form');
//     // đặt tên cho url
//     })->name('admin.show-form');

//     // tham số trong đường dẫn
//     // tham số ko bắt buộc thì có ? cuối 
//     Route::get('unicode/{id}/{name?}', function($id , $name = null){
//         $mess = 'tham số là :';
//         $mess .= $id . '<br>';
//         $mess .= $name;
//         return $mess ;
//     })->where([
//         // validate cho tham số
//         'id' => "[0-9]",
//         'name'=> "[a-z]"
//     ])->name('admin.unicode');


//     Route::get('/' , [DashboardController::class , 'index']);
    

// });

// code htttp
// Route::get('cate/add', [CategoryController::class , 'addcate']);
// Route::post('cate/add', [CategoryController::class , 'post']);
// Route::get('cate/upload', [CategoryController::class , 'showFormUpload']);
// Route::post('cate/upload', [CategoryController::class , 'handle'])->name('cate.upload');




// ============= layout

Route::get('/', [HomeController::class , 'index'])->name('home');
Route::get('products', [HomeController::class , 'products'])->name('products');
Route::get('add-sp', [HomeController::class , 'getadd'])->name('getadd');
// Route::post('add-sp', [HomeController::class , 'postadd'])->name('postadd');
Route::put('add-sp', [HomeController::class , 'putadd'])->name('putadd');