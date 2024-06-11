@extends('auth.layouts.app')

@section('content')
    <section>
        <div class="grid items-center justify-center grid-cols-1 px-4 py-3 md:px-20 md:py-6 md:grid-cols-12">
            <div class="col-span-7 text-gray-100 none md:block">
                <span class="self-center text-[24px] font-logo whitespace-nowrap">Hotel Citra Megah</span>
                <h2 class="w-full mt-5 text-2xl font-medium md:w-3/4 md:text-5xl">Selamat Datang Di Hotel Citra Megah</h2>
                <p class="mb-3 mt-7">Hotel Citra Megah - Hotel bintang lima terbaik di Indonesia</p>
            </div>
            <div class="col-span-5 p-6 bg-white shadow-md">
                <form class="px-3">
                    <div class="flex flex-col text-center">
                        <span class="text-[24px] font-logo whitespace-nowrap text-gray-950">Hotel Citra Megah</span>
                        <span class="text-gray-500">Please enter your email and password.</span>
                    </div>
                    <div class="mt-6">
                        <label for="nama" class="text-[15px] font-normal text-gray-700">Email or username</label>
                        <input type="text" id="nama" name="nama" placeholder="Enter your email or username*" class="w-full p-2 mt-2 border border-gray-300 focus:outline-none focus:ring-1 focus:border-cyan-950">
                    </div>
                    <div class="mt-6">
                        <div class="flex justify-between">
                            <label for="pw" class="text-[15px] font-normal text-gray-700">Password</label>
                            <a href="" class="text-sm text-red-500">Forgot Password ?</a>
                        </div>
                        <div class="flex items-center">
                            <input type="password" id="pw" placeholder="*******" class="w-full p-2 border border-gray-300 focus:outline-none focus:ring-1 focus:border-cyan-950">
                            <button id="showPasswordButton" class="absolute right-32 text-cyan-950 hover:text-cyan-900 focus:outline-none">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zM12 7a7 7 0 00-7 7 7 7 0 007 7 7 7 0 007-7 7 7 0 00-7-7z"></path></svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center mt-6">
                        <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <span class="text-[16px] font-normal text-gray-600 ms-2">Remember Me</span>
                    </div>
                    <button id="customButton" class="w-full py-2 mt-5 font-normal text-white bg-cyan-950 hover:bg-cyan-900">Sign In</button>
                </form>
                <div class="flex flex-col items-center mt-4">
                    <span class="text-gray-500">Or Sign In With</span>
                    <div class="grid grid-cols-4 gap-2 mt-2">
                        <a href="">
                            <img class="w-8" src="{{ asset('icon/fb.svg') }}" alt="">
                        </a>
                        <a href="">
                            <img class="w-8" src="{{ asset('icon/google.svg') }}" alt="">
                        </a>
                        <a href="">
                            <img class="w-8" src="{{ asset('icon/twt.svg') }}" alt="">
                        </a>
                        <a href="">
                            <img class="w-8" src="{{ asset('icon/git.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="mt-10 mb-2 text-center md:mb-12">
                    <span class="text-gray-500">Dont have an account ? <a href="{{ route('register') }}" class="text-sub">Sign Up</a></span>
                </div>
            </div>
            <div>

            </div>
        </div>
    </section>
@endsection

@push('js-custom')
    <script>
        const showPasswordButton = document.getElementById('showPasswordButton');
        const passwordInput = document.getElementById('pw');

        showPasswordButton.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent the default button action
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });
    </script>
@endpush
