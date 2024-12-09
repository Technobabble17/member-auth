<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://jonhecky.dev/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <div class="h-12 w-12">
                <svg class="text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 258.5 258.5">
                    <g>
                        <path fill="currentColor"
                            d="M258.34,123.08c-.06-1.42-.18-2.82-.29-4.23-.05-.55-.08-1.1-.13-1.64-.16-1.81-.38-3.6-.62-5.39a2.54,2.54,0,0,1,0-.29c-.26-1.9-.57-3.78-.91-5.65h0a129.28,129.28,0,1,0-26.1,104l-38.37-27.13a82.37,82.37,0,1,1,16.38-76.84H129.32l0,.08v46.67H256.37a130.88,130.88,0,0,0,2-18.5c.07-1.28.11-2.87.11-4.88S258.44,125.12,258.34,123.08Z" />
                    </g>
                </svg>
            </div>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse gap-4">
            @if (Auth::guard('members')->check())
                <form method="POST" action="{{ route('member.logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            @endif
            @if (!Auth::guard('members')->check())
                <a href="{{ route('member.login.show') }}" class="btn btn-secondary">Login</a>
                <a href="{{ route('member.register.show') }}" class="btn btn-primary">Register</a>
            @endif
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                @include('components.nav-link', ['href' => '/', 'label' => 'Home'])
                @if (Auth::guard('members')->check())
                    @include('components.nav-link', [
                        'href' => '/member/dashboard',
                        'label' => 'Dashboard',
                    ])
                    @include('components.nav-link', [
                        'href' => route('member.index'),
                        'label' => 'Members',
                    ])
                @endif
            </ul>
        </div>
    </div>
</nav>
