<?php

Route::Get('/request_logger', static function () {
    return \response()->json([
        'status' => 'success',
    ]);
})->name('home');
