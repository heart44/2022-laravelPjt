<?php
use App\Http\Controllers\BoardController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//그룹 (1차 주소가 같아서 중복됨)
Route::prefix('boards')->group(function() {
    Route::get('/', [BoardController::class, 'index']);
    Route::get('create', [BoardController::class, 'create'])->name('boards.create');    //화면
    Route::post('store', [BoardController::class, 'store'])->name('boards.store');  //처리
    Route::get('show', [BoardController::class, 'show'])->name('boards.show');
    Route::get('edit', [BoardController::class, 'edit'])->name('boards.edit');  //화면
    Route::post('update', [BoardController::class, 'update'])->name('boards.update');    //처리
    Route::get('destroy', [BoardController::class, 'destroy']);
});
