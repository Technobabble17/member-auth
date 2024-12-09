<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberAuthController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware('guest:members')->group(function () {
    Route::get('member/register', [MemberAuthController::class, 'showRegisterForm'])->name('member.register.show');
    Route::post('member/register', [MemberAuthController::class, 'register'])->name('member.register');

    Route::get('member/login', [MemberAuthController::class, 'showLoginForm'])->name('member.login.show');
    Route::post('member/login', [MemberAuthController::class, 'login'])->name('member.login');
});

Route::middleware('auth:members')->group(function () {
    Route::get('members', [MemberAuthController::class, 'showMembers'])->name('member.index');
    Route::post('member/logout', [MemberAuthController::class, 'logout'])->name('member.logout');
    Route::get('member/dashboard', [MemberAuthController::class, 'dashboard'])->name('member.dashboard');
});
