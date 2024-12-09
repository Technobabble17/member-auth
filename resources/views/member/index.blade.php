@extends('layouts.app')

@section('title', 'Club Members')

@section('content')

    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
            <div class="max-w-xl">
                <h2 class="text-pretty text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl">Meet our members
                </h2>
                <p class="mt-6 text-lg/8 text-gray-600">We’re a dynamic group of individuals who are passionate about what we
                    do and dedicated to delivering the best results for our clients.</p>
            </div>
            <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                @foreach ($members as $member)
                    <li>
                        <div class="flex items-center gap-x-6">
                            <img class="size-16 rounded-full"
                                src="https://thispersondoesnotexist.com/?unique={{ $member->id . Str::random(8) }}"
                                alt="">
                            <div>
                                <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">{{ $member->name }}</h3>
                                <p class="text-sm/6 font-semibold text-indigo-600">
                                    @for ($i = 1; $i < $loop->iteration; $i++)
                                        <span>Assistant to the </span>
                                    @endfor
                                    CEO
                                </p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection
