@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @if (Auth::guard('members')->check())
        <p>Welcome, {{ Auth::guard('members')->user()->name }}!</p>
        <a href="{{ route('member.dashboard') }}">Go to your dashboard</a>
    @else
        <a href="{{ route('member.login.show') }}">Login</a> |
        <a href="{{ route('member.register.show') }}">Register</a>
    @endif

@endsection