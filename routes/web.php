<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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
Route::resource('/', SiswaController::class);
Route::get('/{id}', [SiswaController::class, 'show']);

Route::get('/create', [SiswaController::class, 'create']);
Route::post('/siswa/create', [SiswaController::class, 'store']);
Route::get('/edit/{id}', [SiswaController::class, 'edit']);
Route::put('/siswa/update/{id}', [SiswaController::class, 'update']);
Route::delete('/siswa/delete/{id}', [SiswaController::class, 'destroy']);

Route::get('/all', function () {
    return DB::table("siswas")->get();
});

Route::get('/koneksi-db', function() {
	try {
		\DB::connection()->getPdo();

		echo 'Sudah terkoneksi dengan database: ' . \DB::connection()->getDatabaseName();

	} catch (\Exception $e) {
		echo 'Belum terkoneksi database, error: ' . $e->getMessage();
	}
});
