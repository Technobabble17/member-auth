@extends('layouts.app')

@section('title', 'Member Dashboard')

@section('content')

<p>Welcome, {{ Auth::user()->name }}!</p>

@endsection