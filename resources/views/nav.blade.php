<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="group overflow-clip relative h-12 md:w-1/3">
            <a href="{{ route('home') }}" class="flex group/button items-center space-x-3 rtl:space-x-reverse">

                <div class="h-full w-12 absolute bottom-0">
                    <svg class="text-blue-500 group-focus/button:text-white group-hover/button:text-white transition duration-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 258.5 258.5">
                        <path fill="currentColor"
                            d="M258.34,123.08c-.06-1.42-.18-2.82-.29-4.23-.05-.55-.08-1.1-.13-1.64-.16-1.81-.38-3.6-.62-5.39a2.54,2.54,0,0,1,0-.29c-.26-1.9-.57-3.78-.91-5.65h0a129.28,129.28,0,1,0-26.1,104l-38.37-27.13a82.37,82.37,0,1,1,16.38-76.84H129.32l0,.08v46.67H256.37a130.88,130.88,0,0,0,2-18.5c.07-1.28.11-2.87.11-4.88S258.44,125.12,258.34,123.08Z" />
                    </svg>
                </div>
            </a>
        </div>
        <div class="flex md:order-2 md:w-1/3 space-x-3 md:space-x-0 md:justify-end rtl:space-x-reverse gap-4">
            @if (Auth::guard('members')->check())
                <form method="POST" action="{{ route('member.logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-secondary">Logout</button>
                </form>
            @endif
            @if (!Auth::guard('members')->check())
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            @endif
            <!-- Mobile menu button -->
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

        <!-- Collapsible navigation menu -->
        <div class="md:w-1/3 items-center justify-between hidden max-md:w-full md:flex md:justify-center md:order-1"
            id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg
                       bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white
                       dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/"
                        class="block {{ request()->is('/') ? 'link-active' : 'link' }}">Home</a>
                </li>
                @if (Auth::guard('members')->check())
                    @include('components.nav-link', [
                        'href' => '/member/dashboard',
                        'label' => 'Dashboard',
                        'routeName' => 'member.dashboard',
                    ])
                    @include('components.nav-link', [
                        'href' => route('member.index'),
                        'label' => 'Members',
                        'routeName' => 'member.index',
                    ])
                @endif
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.querySelector('[data-collapse-toggle="navbar-sticky"]');
        const navMenu = document.getElementById('navbar-sticky');

        toggleButton.addEventListener('click', () => {
            navMenu.classList.toggle('hidden');
        });
    });
</script>
