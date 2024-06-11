<nav class="top-0 left-0 z-20 w-full bg-white border-b border-gray-200 dark:bg-gray-900 dark:border-gray-600">
    <div class="flex flex-wrap items-center justify-around max-w-screen-xl p-4 mx-auto">
        <a href="/" class="flex items-center">
            <span class="self-center text-[24px] font-logo whitespace-nowrap dark:text-white">Hotel Citra Megah</span>
        </a>
        <div class="flex md:order-2">
            <a href="{{ route('login') }}">
                <button type="button" class="hidden px-4 py-2 mr-3 text-sm font-medium text-center text-white bg-blue-900 md:block hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login/Sign Up</button>
            </a>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
                <a href="{{ route('home') }}" class="block py-2 pl-3 pr-4 {{ request()->is('/') ? 'text-white bg-teal-700 rounded font-menu md:bg-transparent md:text-teal-600 md:p-0 md:dark:text-blue-500' : 'text-gray-900 rounded font-menu hover:bg-gray-100 md:hover:bg-transparent md:hover:text-teal-600 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }}" aria-current="page">Home</a>
            </li>
            <li>
                <a href="" class="block py-2 pl-3 pr-4 {{ request()->is('rooms') ? 'text-white bg-teal-700 rounded font-menu md:bg-transparent md:text-teal-600 md:p-0 md:dark:text-blue-500' : 'text-gray-900 rounded font-menu hover:bg-gray-100 md:hover:bg-transparent md:hover:text-teal-600 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }}">Rooms</a>
            </li>
            <li>
                <a href="{{ route('about') }}" class="block py-2 pl-3 pr-4 {{ request()->is('about') ? 'text-white bg-teal-700 rounded font-menu md:bg-transparent md:text-teal-600 md:p-0 md:dark:text-blue-500' : 'text-gray-900 rounded font-menu hover:bg-gray-100 md:hover:bg-transparent md:hover:text-teal-600 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }}">About</a>
            </li>
            <li>
                <a href="#" class="block py-2 pl-3 pr-4 {{ request()->is('/service') ? 'text-white bg-teal-700 rounded font-menu md:bg-transparent md:text-teal-600 md:p-0 md:dark:text-blue-500' : 'text-gray-900 rounded font-menu hover:bg-gray-100 md:hover:bg-transparent md:hover:text-teal-600 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }}">Services</a>
            </li>
            <li>
                <a href="#" class="block py-2 pl-3 pr-4 {{ request()->is('/contact') ? 'text-white bg-teal-700 rounded font-menu md:bg-transparent md:text-teal-600 md:p-0 md:dark:text-blue-500' : 'text-gray-900 rounded font-menu hover:bg-gray-100 md:hover:bg-transparent md:hover:text-teal-600 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }}">Contact</a>
            </li>
            <li>
                <button type="button" class="block px-4 py-2 mt-6 mr-5 text-sm font-medium text-center text-white bg-blue-900 md:hidden hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login/Sign Up</button>
            </li>
            </ul>
        </div>
    </div>
</nav>
