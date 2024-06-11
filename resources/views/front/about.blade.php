@extends('front.layout.app')

@section('title', 'About Us')

@section('content')
    {{-- Banner --}}
    <section>
        <img src="{{ asset('image/about-img.png') }}" alt="banner" class="h-auto max-w-full mx-auto">
        <div class="relative">
            <span class="absolute py-1 px-1 md:px-5 md:text-5xl text-lg font-medium text-white md:py-7 left-32 bottom-[0.4px] bg-footer">About Us</span>
        </div>
    </section>

    {{-- About Us --}}
    <section class="max-w-screen-xl py-8 mx-auto mt-16">
        <div class="">
            <div class="items-center md:flex">
                <img src="{{ asset('image/sec1-about.png') }}" alt="Gambar" class="flex justify-center object-cover mb-4 w-96 md:h-auto md:ms-28 md:mb-0">
                <div class="text-center md:w-3/6 md:ml-20 md:text-left">
                    <h1 class="mt-4 text-3xl font-semibold text-gray-800">Hotel Citra Megah</h1>
                    <p class="mt-2 text-gray-600 md:w-3/4">Kami adalah hotel mewah dengan layanan yang tak tertandingi dan keramahan yang hangat. Dengan lokasi strategis di pusat kota, kami menawarkan pengalaman menginap yang tak terlupakan bagi para tamu kami. Staf kami yang profesional dan berpengalaman siap membantu Anda menjadikan setiap kunjungan Anda menjadi istimewa.</p>
                    <div class="flex justify-center gap-20 md:justify-normal mt-14">
                        <div class="flex flex-col items-center justify-center text-center">
                            <svg width="41" height="42" viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.2213 0.88436C33.5126 0.885666 34.7877 1.16914 35.9559 1.71461C37.1241 2.26008 38.1568 3.05414 38.9804 4.04031C39.804 5.02647 40.3983 6.1805 40.7211 7.4203C41.0438 8.6601 41.0871 9.95519 40.8477 11.2134C40.6084 12.4717 40.0924 13.6622 39.3364 14.7002C38.5804 15.7383 37.603 16.5983 36.4737 17.2193C35.3444 17.8402 34.091 18.2067 32.8027 18.2927C31.5144 18.3787 30.2227 18.1821 29.0197 17.7169L19.0399 30.9012V38.6451H23.4337C23.8221 38.6451 24.1947 38.7981 24.4693 39.0704C24.744 39.3428 24.8983 39.7122 24.8983 40.0974C24.8983 40.4826 24.744 40.852 24.4693 41.1244C24.1947 41.3967 23.8221 41.5497 23.4337 41.5497H11.7168C11.3284 41.5497 10.9559 41.3967 10.6812 41.1244C10.4065 40.852 10.2522 40.4826 10.2522 40.0974C10.2522 39.7122 10.4065 39.3428 10.6812 39.0704C10.9559 38.7981 11.3284 38.6451 11.7168 38.6451H16.1107V30.9012L0.585842 10.3942C0.205566 9.89146 0 9.27993 0 8.65145V8.16637C0 7.78118 0.154306 7.41178 0.428973 7.13941C0.70364 6.86705 1.07617 6.71403 1.46461 6.71403H4.75118L1.75167 2.90891C1.51239 2.60539 1.40451 2.22004 1.45175 1.83764C1.49899 1.45524 1.69749 1.10711 2.00358 0.869836C2.30967 0.632564 2.69827 0.525583 3.08391 0.57243C3.46954 0.619277 3.82061 0.816114 4.05989 1.11964L8.46542 6.71403H23.9229C24.5263 5.00938 25.649 3.53277 27.1356 2.4884C28.6223 1.44404 30.3994 0.883518 32.2213 0.88436ZM27.1362 6.71403H33.6859C34.0744 6.71403 34.4469 6.86705 34.7216 7.13941C34.9962 7.41178 35.1505 7.78118 35.1505 8.16637V8.64854C35.1505 9.27703 34.945 9.88856 34.5647 10.3913L30.8827 15.2567C31.9406 15.5025 33.0467 15.4516 34.0772 15.1099C35.1077 14.7681 36.0221 14.1489 36.7181 13.3214C37.4141 12.4939 37.8642 11.4908 38.0183 10.4242C38.1724 9.35755 38.0242 8.26945 37.5905 7.28151C37.1567 6.29357 36.4544 5.44472 35.5621 4.82985C34.6698 4.21498 33.6226 3.85832 32.5376 3.79974C31.4525 3.74117 30.3725 3.98298 29.4181 4.49814C28.4637 5.01331 27.6726 5.78153 27.1333 6.71694V6.71403H27.1362ZM10.7561 9.6187L16.6819 17.1418C16.9076 17.4463 17.0047 17.8261 16.9526 18.2005C16.9005 18.5749 16.7033 18.9144 16.4029 19.1469C16.1024 19.3794 15.7224 19.4866 15.3435 19.4458C14.9646 19.405 14.6167 19.2193 14.3736 18.9282L7.0389 9.6187H3.66151L17.5753 27.9965L31.489 9.6187H10.7561Z" fill="#1D7C82"/>
                            </svg>
                            <p class="font-semibold text-gray-800">Restaurant</p>
                        </div>
                        <div class="flex flex-col items-center justify-center text-center">
                            <svg width="41" height="42" viewBox="0 0 57 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.8636 13.5535H38.1364M17.4188 1.55701H10.6733C10.29 1.55701 9.92233 1.70868 9.65126 1.97865C9.38018 2.24862 9.22789 2.61479 9.22789 2.99659V24.1105C9.22789 24.2995 9.26528 24.4867 9.33792 24.6614C9.41056 24.836 9.51703 24.9947 9.65126 25.1284C9.78548 25.2621 9.94483 25.3681 10.1202 25.4405C10.2956 25.5128 10.4835 25.55 10.6733 25.55H17.4188C17.6086 25.55 17.7966 25.5128 17.972 25.4405C18.1473 25.3681 18.3067 25.2621 18.4409 25.1284C18.5751 24.9947 18.6816 24.836 18.7542 24.6614C18.8269 24.4867 18.8643 24.2995 18.8643 24.1105V2.99659C18.8643 2.61479 18.712 2.24862 18.4409 1.97865C18.1698 1.70868 17.8022 1.55701 17.4188 1.55701ZM46.3279 1.55701H39.5824C39.1991 1.55701 38.8314 1.70868 38.5603 1.97865C38.2893 2.24862 38.137 2.61479 38.137 2.99659V24.1105C38.137 24.2995 38.1744 24.4867 38.247 24.6614C38.3197 24.836 38.4261 24.9947 38.5603 25.1284C38.6946 25.2621 38.8539 25.3681 39.0293 25.4405C39.2047 25.5128 39.3926 25.55 39.5824 25.55H46.3279C46.5177 25.55 46.7057 25.5128 46.881 25.4405C47.0564 25.3681 47.2158 25.2621 47.35 25.1284C47.4842 24.9947 47.5907 24.836 47.6633 24.6614C47.736 24.4867 47.7733 24.2995 47.7733 24.1105V2.99659C47.7733 2.61479 47.6211 2.24862 47.35 1.97865C47.0789 1.70868 46.7113 1.55701 46.3279 1.55701ZM2 19.3118V7.79519C2 7.41339 2.15229 7.04722 2.42336 6.77725C2.69444 6.50728 3.0621 6.35561 3.44545 6.35561H7.78182C8.16518 6.35561 8.53283 6.50728 8.80391 6.77725C9.07498 7.04722 9.22727 7.41339 9.22727 7.79519V19.3118C9.22727 19.6936 9.07498 20.0598 8.80391 20.3298C8.53283 20.5998 8.16518 20.7514 7.78182 20.7514H3.44545C3.0621 20.7514 2.69444 20.5998 2.42336 20.3298C2.15229 20.0598 2 19.6936 2 19.3118ZM55 19.3118V7.79519C55 7.41339 54.8477 7.04722 54.5766 6.77725C54.3056 6.50728 53.9379 6.35561 53.5545 6.35561H49.2182C48.8348 6.35561 48.4672 6.50728 48.1961 6.77725C47.925 7.04722 47.7727 7.41339 47.7727 7.79519V19.3118C47.7727 19.6936 47.925 20.0598 48.1961 20.3298C48.4672 20.5998 48.8348 20.7514 49.2182 20.7514H53.5545C53.9379 20.7514 54.3056 20.5998 54.5766 20.3298C54.8477 20.0598 55 19.6936 55 19.3118Z" stroke="#1D7C82" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <p class="font-semibold text-gray-800">Gym</p>
                        </div>
                        <div class="flex flex-col items-center justify-center text-center">
                            <svg width="41" height="42" viewBox="0 0 38 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M34.8659 4.39961C35.4245 4.95642 35.7382 5.71161 35.7382 6.49906V15.4063H32.7601V6.49906H26.8037V9.46814H23.8255V6.49906H11.9127V9.46814H8.93456V6.49906H2.97819V36.1898H8.93456V39.1589H2.97819C2.18832 39.1589 1.43081 38.8461 0.87229 38.2893C0.313772 37.7324 0 36.9773 0 36.1898V6.49906C0 5.71161 0.313772 4.95642 0.87229 4.39961C1.43081 3.8428 2.18832 3.52999 2.97819 3.52999H8.93456V0.560913H11.9127V3.52999H23.8255V0.560913H26.8037V3.52999H32.7601C33.5499 3.52999 34.3074 3.8428 34.8659 4.39961ZM25.3147 42.1279C22.9586 42.1279 20.6554 41.4314 18.6963 40.1264C16.7373 38.8214 15.2104 36.9666 14.3088 34.7965C13.4071 32.6264 13.1712 30.2385 13.6309 27.9347C14.0905 25.6309 15.2251 23.5147 16.8911 21.8538C18.5571 20.1929 20.6798 19.0618 22.9906 18.6035C25.3015 18.1453 27.6967 18.3805 29.8735 19.2794C32.0503 20.1782 33.9108 21.7005 35.2198 23.6535C36.5288 25.6066 37.2275 27.9027 37.2275 30.2516C37.2275 33.4014 35.9724 36.4222 33.7383 38.6494C31.5042 40.8767 28.4742 42.1279 25.3147 42.1279ZM25.3147 21.3444C23.5476 21.3444 21.8202 21.8668 20.3509 22.8455C18.8816 23.8243 17.7365 25.2154 17.0602 26.843C16.384 28.4706 16.2071 30.2615 16.5518 31.9893C16.8966 33.7172 17.7475 35.3043 18.997 36.55C20.2465 37.7957 21.8385 38.644 23.5717 38.9877C25.3048 39.3314 27.1012 39.155 28.7338 38.4808C30.3664 37.8067 31.7618 36.665 32.7435 35.2002C33.7253 33.7354 34.2493 32.0133 34.2493 30.2516C34.2493 27.8893 33.308 25.6237 31.6324 23.9533C29.9568 22.2828 27.6843 21.3444 25.3147 21.3444ZM27.6818 34.7053L23.8251 30.8604V24.3136H26.8032V29.643L29.7814 32.6121L27.6818 34.7053Z" fill="#1D7C82"/>
                            </svg>
                            <p class="font-semibold text-gray-800">Event</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Visi Misi --}}
    <section class="max-w-screen-xl px-10 mx-auto mt-10 mb-16 md:px-10 lg:px-28">
        <div class="grid grid-cols-1 gap-10 md:grid-cols-2">
            <div class="flex flex-col items-center px-10 pt-5 pb-14 bg-footer">
                <img class="p-3 rounded-full bg-sub" width="51" height="51" src="{{ asset('icon/visi.svg') }}">
                <h2 class="mt-5 mb-4 text-xl font-semibold text-white">Visi</h2>
                <p class="text-center text-gray-400">Visi kami adalah menjadi destinasi pilihan utama bagi para wisatawan yang mencari kemewahan dan kenyamanan dalam perjalanan mereka. Kami bertujuan untuk menciptakan momen berharga dan kesan mendalam bagi setiap tamu yang menginap di Hotel Vista Indah.</p>
            </div>
            <div class="flex flex-col items-center px-10 pt-5 pb-14 bg-footer">
                <img class="p-3 rounded-full bg-sub" width="51" height="51" src="{{ asset('icon/misi.svg') }}">
                <h2 class="mt-5 mb-4 text-xl font-semibold text-white">Misi</h2>
                <p class="text-center text-gray-400">Misi kami adalah memberikan pelayanan terbaik yang memenuhi harapan tamu kami. Kami melakukannya dengan menyediakan kualitas kamar yang unggul, fasilitas modern, serta staf yang ramah dan profesional. Kami berusaha untuk memberikan pengalaman yang luar biasa dan membuat tamu kami merasa seperti di rumah sendiri.</p>
            </div>
        </div>
    </section>

    <section class="mb-20">
        <div class="flex flex-col items-center justify-center max-w-screen-xl mx-auto text-center">
            <h2 href="" class="mt-0 text-3xl font-semibold text-gray-800">Beberapa Lokasi Hotel Kami di Indonesia</h2>
            <p class="mt-2 text-gray-600">Kami juga memiliki beberapa Hotel Citra Megah yang sudah tersebar di berbagai wilayah Indonesia</p>
            <div class="grid gap-12 mt-10 md:grid-cols-2 lg:grid-cols-3">
                <div class="text-center">
                    <img class="w-80" src="{{ asset('image/jogja.png') }}">
                    <h5 class="mt-1 text-lg font-medium text-gray-800">Yogyakarta</h5>
                </div>
                <div class="text-center">
                    <img class="w-80" src="{{ asset('image/bali.png') }}">
                    <h5 class="mt-1 text-lg font-medium text-gray-800">Bali</h5>
                </div>
                <div class="text-center">
                    <img class="w-80" src="{{ asset('image/jakarta.png') }}">
                    <h5 class="mt-1 text-lg font-medium text-gray-800">Jakarta</h5>
                </div>
            </div>
        </div>
    </section>
@endsection
