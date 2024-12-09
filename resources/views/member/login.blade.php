@extends('layouts.app')

@section('title', 'Member Login')

@section('content')
   @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('member.login') }}" method="post">
        @csrf
        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>

        <div style="margin-top: 10px;">
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" required>
        </div>

        <div style="margin-top: 10px;">
            <button type="submit">Login</button>
        </div>
    </form>
@endsection