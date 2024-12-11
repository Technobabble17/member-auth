@extends('layouts.app')

@section('title', 'Member Registration')

@section('content')

    <div class="max-w-md mx-auto rounded bg-gray-700 p-8 mt-8 pb-16 overflow-hidden shadow shadow-blue-600">
        <form action="{{ route('member.register') }}" method="post" class="">
            @csrf
            @include('components.input', [
                'name' => 'name',
                'type' => 'text',
                'required' => true,
                'label' => 'Name',
                'value' => old('name'),
            ])
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
            @include('components.input', [
                'name' => 'password_confirmation',
                'type' => 'password',
                'required' => true,
                'label' => 'Confirm password',
            ])

            <button type="submit"
                class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700">Submit</button>
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
    </div>

@endsection
