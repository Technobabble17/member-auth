<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberAuthController;

Route::middleware('guest:members')->group(function () {
    Route::get('member/register', [MemberAuthController::class, 'showRegisterForm'])->name('member.register.show');
    Route::post('member/register', [MemberAuthController::class, 'register'])->name('member.register');

    Route::get('member/login', [MemberAuthController::class, 'showLoginForm'])->name('member.login.show');
    Route::post('member/login', [MemberAuthController::class, 'login'])->name('member.login');
});

Route::post('member/logout', [MemberAuthController::class, 'logout'])->name('member.logout')->middleware('auth:members');

Route::get('member/dashboard', [MemberAuthController::class, 'dashboard'])->middleware('auth:members')->name('member.dashboard');
