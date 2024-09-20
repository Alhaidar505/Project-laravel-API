<?php

use App\Http\Controllers\SiswaController;
use GuzzleHttp\Middleware;
use illminate\Http\request;
use Illuminate\Support\Facades\Route;

Route::get('/siswa', [SiswaController::class, 'index']);

Route::get('/siswa/{nis}', [SiswaController::class, 'index']);

route::post('/siswa', [SiswaController::class, 'create']);

route::put('/siswa/{nis}', [SiswaController::class, 'update']);

route::delete('/siswa/{nis}', [SiswaController::class, 'delete']);










