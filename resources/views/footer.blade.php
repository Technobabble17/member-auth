<footer class="bg-white dark:bg-gray-900 p-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="/"
                        class="block {{ request()->is('/') ? 'link-active' : 'link' }} hover:underline me-4 md:me-6">Home</a>
                </li>
                @if (!Auth::guard('members')->check())
                    <a href="{{ route('login') }}"
                        class="{{ request()->routeIs('login') ? 'link-active' : 'link' }} hover:underline me-4 md:me-6">Login</a>
                    <a href="{{ route('member.register.show') }}"
                        class="{{ request()->routeIs('member.register.show') ? 'link-active' : 'link' }} hover:underline me-4 md:me-6">Register</a>
                @endif
                @if (Auth::guard('members')->check())
                    <li>
                        <a href="{{ route('member.dashboard') }}"
                            class="block {{ request()->routeIs('member.dashboard') ? 'link-active' : 'link' }} hover:underline me-4 md:me-6">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('member.index') }}"
                            class="block {{ request()->routeIs('member.index') ? 'link-active' : 'link' }} hover:underline me-4 md:me-6">Members</a>
                    </li>
                @endif
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
    </div>
</footer>
