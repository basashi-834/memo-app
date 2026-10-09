<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoController;

Route::get('/memos', [MemoController::class, 'index']);

Route::get('/memos/create', [MemoController::class, 'create'])
    ->name('memos.create');

Route::post('/memos', [MemoController::class, 'store'])
    ->name('memos.store');

Route::get('/memos/{id}', [MemoController::class, 'show'])
    ->name('memos.show');

Route::get('/memos/{id}/edit', [MemoController::class, 'edit'])
    ->name('memos.edit');

Route::put('/memos/{id}', [MemoController::class, 'update'])
    ->name('memos.update');

Route::delete('/memos/{id}', [MemoController::class, 'destroy'])
    ->name('memos.destroy');
