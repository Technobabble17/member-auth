@extends('layouts.app')

@section('title', 'Member Registration')

@section('content')

    <div class="parent max-w-md mx-auto rounded bg-gray-700 p-8 mt-8 pb-16 overflow-hidden shadow shadow-blue-600">
        <form action="{{ route('member.register') }}" method="post" class="">
            @csrf
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="name" value="{{ old('name') }}" placeholder=" " required
                    class="block caret-blue-500 rounded-tr-md focus-within:bg-gray-600 transition duration-500 py-2.5 px-2 w-full text-sm bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:outline-none focus:ring-0 peer" />
                <label for="name"
                    class="@error('name') !text-red-500 !peer-focus:text-red-500 @enderror peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-7 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-7">
                    Name</label>
                <div
                    class="absolute bottom-0 w-0 h-[2px] bg-blue-500 peer-focus:w-full transition-all ease-in-out duration-500">
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="email" name="email" value="{{ old('email') }}" placeholder=" " required
                    class="block caret-blue-500 rounded-tr-md focus-within:bg-gray-600 transition duration-500 py-2.5 px-2 w-full text-sm bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:outline-none focus:ring-0 peer" />
                <label for="email"
                    class="@error('email') !text-red-500 !peer-focus:text-red-500 @enderror peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-7 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-7">Email
                    address</label>
                <div
                    class="absolute bottom-0 w-0 h-[2px] bg-blue-500 peer-focus:w-full transition-all ease-in-out duration-500">
                </div>

            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="password" name="password" required placeholder=" "
                    class="block caret-blue-500 rounded-tr-md focus-within:bg-gray-600 transition duration-500 py-2.5 px-2 w-full text-sm bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:outline-none focus:ring-0 peer" />
                <label for="password"
                    class="@error('password') !text-red-500 !peer-focus:text-red-500 @enderror peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-7 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-7">Password</label>
                <div
                    class="absolute bottom-0 w-0 h-[2px] bg-blue-500 peer-focus:w-full transition-all ease-in-out duration-500">
                </div>

            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="password" name="password_confirmation" required placeholder=" "
                    class="block caret-blue-500 rounded-tr-md focus-within:bg-gray-600 transition duration-500 py-2.5 px-2 w-full text-sm bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:outline-none focus:ring-0 peer" />
                <label for="password_confirmation"
                    class="@error('password') !text-red-500 !peer-focus:text-red-500 @enderror peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-7 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-7">Confirm
                    password</label>
                <div
                    class="absolute bottom-0 w-0 h-[2px] bg-blue-500 peer-focus:w-full transition-all ease-in-out duration-500">
                </div>

            </div>
            <button type="submit"
                class="follower absolute text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700">Submit</button>
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
