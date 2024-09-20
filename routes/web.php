<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;


Route::get('/pp', function () {
    return view('welcome');
});

Route::get('/api/siswa', [SiswaController::class, 'index']);

Route::get('/api/siswa/{nis}', [SiswaController::class, 'show']);

route::post('/siswa', [SiswaController::class, 'create']);

route::put('/siswa/{nis}', [SiswaController::class, 'update']);

