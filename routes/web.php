<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoController;

Route::get('/memos', [MemoController::class, 'index']);
Route::get('/memos/create', [MemoController::class, 'create']);
Route::post('/memos', [MemoController::class, 'store']);
Route::get('/memos/{id}', [MemoController::class, 'show']);
Route::get('/memos/{id}/edit', [MemoController::class, 'edit']);
Route::put('/memos/{id}', [MemoController::class, 'update']);
Route::delete('/memos/{id}',[MemoController::class, 'destroy']);