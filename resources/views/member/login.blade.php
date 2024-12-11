@extends('layouts.app')

@section('title', 'Member Login')

@section('content')

    <div class="max-w-md mx-auto rounded bg-gray-700 p-8 mt-8 pb-16 overflow-hidden shadow shadow-blue-600">
        <form action="{{ route('member.login') }}" method="post" class="">
            @csrf
            @include('components.input', [
                'name' => 'email',
                'type' => 'email',
                'required' => true,
                'label' => 'Email address',
                'value' => old('email'),
            ])
            @include('components.input', [
                'name' => 'password',
                'type' => 'password',
                'required' => true,
                'label' => 'Password',
            ])

            <button type="submit"
                class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700">Login</button>
        </form>
        @if ($errors->any())
            <div class="mt-24">
                <ul class="prose prose-p:text-red-500 prose-p:m-0">
                    @foreach ($errors->all() as $error)
                        <li>
                            <p class="">{!! $error !!}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mt-8 text-center">
            <p class="text-white text-sm">
                Don't have an account? <a href="{{ route('member.register') }}" class="relative no-underline text-blue-400 hover:text-blue-300 after:bg-blue-400 after:absolute after:h-[2px] after:w-full after:-bottom-[2px] after:left-0 hover:after:translate-x-2 hover:after:bg-blue-300 after:transition-all after:duration-300">Register here</a>.
            </p>
        </div>
    </div>

@endsection
