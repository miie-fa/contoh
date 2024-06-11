@extends('front.layout.app')

@section('title', 'Pemesanan')

@section('content')
    <section class="max-w-screen-xl mx-auto">
        <div class="flex flex-col justify-around p-6 lg:px-24">
            <h2 class="mb-10 font-semibold text-gray-800 lg:w-3/5 lg:text-3xl">Isi dan lengkapilah form reservasi dibawah dengan baik dan benar!</h2>
            <p class="text-sm font-normal text-sub">Login atau daftar untuk pemesanan lebih cepat *</p>
            <div class="grid grid-cols-1 gap-6 mt-4 mb-10 md:grid-cols-5">
                <!-- Form Pemesanan -->
                <div class="col-span-3 p-6 bg-gray-100 shadow-md">
                    <form>
                        <div class="mb-4">
                            <label for="nama" class="text-[1.3em] font-medium text-gray-800">Info Kontak</label>
                            <div class="grid grid-cols-2 gap-4">
                                <input type="text" id="nama" name="nama" placeholder="Nama Depan*" class="w-full p-2 mt-2 border border-gray-300 focus:outline-none focus:ring-1 focus:border-cyan-950">
                                <input type="text" id="nama" name="nama" placeholder="Nama Belakang*" class="w-full p-2 mt-2 border border-gray-300 focus:outline-none focus:ring-1 focus:border-cyan-950">
                                <input type="text" id="nama" name="nama" placeholder="Email*" class="w-full p-2 mt-2 border border-gray-300 focus:outline-none focus:ring-1 focus:border-cyan-950">
                                <input type="text" id="nama" name="nama" placeholder="Nomor Telepon*" class="w-full p-2 mt-2 border border-gray-300 focus:outline-none focus:ring-1 focus:border-cyan-950">
                                <span class="text-[12px] italic font-normal text-sub -mt-2">Email ini akan menjadi tujuan pengiriman konfirmasi Anda.</span>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="nama" class="text-[1.3em] font-medium text-gray-800">Alamat</label>
                            <div class="w-full mb-3">
                                <select name="" class="w-2/4 p-2 mt-2 text-black placeholder-gray-400 border border-gray-300 focus:outline-none focus:ring-1 focus:border-cyan-950" id="">
                                    <option class="" selected>Negara*</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="FR">France</option>
                                    <option value="DE">Germany</option>
                                </select>
                            </div>
                            <textarea id="message" rows="4" class="w-full p-2 border border-gray-300 focus:outline-none focus:ring-1 focus:border-cyan-950" placeholder="Alamat Tempat Tinggal Sekarang (Optional)"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="detail" class="text-[1.3em] font-medium text-gray-800">Detail dan Preferensi Tambahan <span class="text-sub">(optional)</span></label>
                            <textarea id="detail" rows="4" class="w-full p-2 mt-2 border border-gray-300 focus:outline-none focus:ring-1 focus:border-cyan-950" placeholder="Alamat Tempat Tinggal Sekarang (Optional)"></textarea>
                        </div>
                    </form>
                </div>

                <!-- Ringkasan Pemesanan -->
                <div class="col-span-2 ">
                    <div class="h-auto bg-gray-100 shadow-md p-7">
                        <h2 class="mb-4 text-2xl font-medium">Ringkasan Pemesanan</h2>
                        <div class="mb-4">
                            <div class="flex">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 10H4V19H20V10ZM15.0355 11.136L16.4497 12.5503L11.5 17.5L7.96447 13.9645L9.37868 12.5503L11.5 14.6716L15.0355 11.136ZM7 5H4V8H20V5H17V6H15V5H9V6H7V5Z" fill="#162034"/>
                                </svg>
                                <span class="text-sub text-light ms-1">Check In</span>
                            </div>
                            <input type="text" id="small-input" class="block w-full p-2 mt-2 text-gray-900 border border-gray-300 bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <div class="flex">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.3999 2V0H5.3999V2H1.3999C0.847622 2 0.399902 2.44772 0.399902 3V19C0.399902 19.5523 0.847622 20 1.3999 20H19.3999C19.9522 20 20.3999 19.5523 20.3999 19V3C20.3999 2.44772 19.9522 2 19.3999 2H15.3999V0H13.3999V2H7.3999ZM2.3999 9H18.3999V18H2.3999V9ZM2.3999 4H5.3999V5H7.3999V4H13.3999V5H15.3999V4H18.3999V7H2.3999V4ZM8.27852 9.9644L10.3999 12.0858L12.5211 9.9644L13.9354 11.3785L11.8141 13.5001L13.9353 15.6212L12.5212 17.0354L10.3999 14.9143L8.27845 17.0354L6.86432 15.6211L8.9856 13.5001L6.86426 11.3785L8.27852 9.9644Z" fill="#162034"/>
                                </svg>
                                <span class="text-sub text-light ms-1">Check Out</span>
                            </div>
                            <input type="text" id="small-input" class="block w-full p-2 mt-2 text-gray-900 border border-gray-300 bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-4">
                            <div class="flex">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 19H23V21H1V19H3V4C3 3.44772 3.44772 3 4 3H14C14.5523 3 15 3.44772 15 4V19H19V11H17V9H20C20.5523 9 21 9.44772 21 10V19ZM5 5V19H13V5H5ZM7 11H11V13H7V11ZM7 7H11V9H7V7Z" fill="#162034"/>
                                </svg>
                                <span class="text-sub text-light ms-1">Hotel</span>
                            </div>
                            <p class="text-gray-700">Hotel Citra Megah Bali, Standard Room</p>
                            <hr class="h-px my-1 bg-gray-800 border-2 rounded-lg ">
                            <div class="flex justify-between">
                                <span class="font-light text-sub">1 malam</span>
                                <span class="font-semibold">Rp 400.000</span>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="#162034"/>
                                </svg>
                                <span class="text-sub text-light ms-1">Tambah rencana penginapan</span>
                            </div>
                            <select id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                <option selected>Choose a plan</option>
                                <option value="US">Spa dan Gebugaran - Dewasa</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>
                            <div class="flex justify-between mt-1">
                                <div class="flex items-center justify-center space-x-4">
                                    <button id="decrease" class="text-gray-700 ">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 11V13H19V11H5Z" fill="#162034"/>
                                        </svg>
                                    </button>
                                    <span id="count" class="text-sub">0</span>
                                    <button id="increase" class="text-gray-700 ">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" fill="#162034"/>
                                        </svg>
                                    </button>
                                </div>
                                <span class="font-semibold">Rp 400.000</span>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between">
                                <span>Jumlah Orang :</span>
                                <span>2 Dewasa, 1 Anak</span>
                            </div>
                            <hr class="my-1 border border-dashed border-cyan-600">
                            <div class="flex justify-between">
                                <span class="text-xl font-medium">Total:</span>
                                <span class="text-xl font-medium">Rp 400.000</span>
                            </div>
                        </div>
                    </div>
                    <button id="customButton" class="w-full py-3 mt-5 font-bold text-white uppercase bg-cyan-950 hover:bg-cyan-900">Booking</button>
                </div>

                {{-- Kebijakan --}}
                <div class="col-span-3">
                    <div class="h-auto bg-gray-100 shadow-md p-7">
                        <h2 class="mb-4 text-2xl font-medium">Kebijakan:</h2>
                        <div class="grid grid-cols-3 mb-2">
                            <span class="col-span-1 font-light">Check In :</span>
                            <span class="col-span-2 font-medium">Minggu, 20.00 - 16 July 2023</span>
                        </div>
                        <div class="grid grid-cols-3 mb-2">
                            <span class="col-span-1 font-light">Check Out :</span>
                            <span class="col-span-2 font-medium">Senin, 20.00 - 17 July 2023</span>
                        </div>
                        <div class="grid grid-cols-3 mb-5">
                            <span class="col-span-1 font-light">Hotel</span>
                            <span class="col-span-2 font-medium">Hotel Citra Megah Bali, Standard Room</span>
                        </div>
                        <div class="flex flex-col mb-5">
                            <span class="font-medium uppercase">Kebijakan garansi</span>
                            <span class="font-light text-sub">Pay At Hotel (Bayar di Jotel)</span>
                        </div>
                        <div class="flex flex-col mb-3">
                            <span class="font-medium uppercase">KEBIJAKAN PEMBATALAN</span>
                            <span class="font-light text-sub">Tidak Dapat Dikembalikan - 100% dari jumlah total akan dibebankan pada saat pemesanan.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js-custom')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
    <script>
        const customButton = document.getElementById('customButton');

        customButton.addEventListener('click', () => {
            Swal.fire({
                html: `
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('icon/check.png') }}" alt="Check Icon" class="w-8 h-8 mt-5 mb-2">
                        <span class="text-lg font-normal text-sub">Terima Kasih</span>
                        <h2 class="mt-3 text-xl font-semibold text-center">Pemesanan anda telah selesai</h2>
                        <span class="text-sm text-center">Terima kasih telah memilih hotel kami sebagai tempat menginap anda</span>
                        <span class="text-[17px] mb-7 mt-7 text-sub text-center">Tunggu beberapa menit, kami akan segera mengirimkan konfirmasi pemesanan ke akun email anda.</span>
                        <div class="flex justify-center space-x-4">
                            <button class="px-3 py-2 text-white text-[15px] bg-cyan-950 hover:bg-cyan-900">
                                Batalkan Pemesanan
                            </button>
                            <button class="px-3 py-2 text-white text-[15px] bg-cyan-950 hover:bg-cyan-900">
                                Cek Pemesanan
                            </button>
                        </div>
                    </div>
                `,
                showCancelButton: false,
                showConfirmButton: false,
            });
        });

        const openModalButton = document.getElementById('openModalButton');
    const closeModalButton = document.getElementById('closeModalButton');
    const modal = document.getElementById('myModal');
    const overlay = document.getElementById('overlay');

    openModalButton.addEventListener('click', () => {
        modal.classList.remove('opacity-0', 'pointer-events-none', 'scale-95');
        overlay.classList.remove('opacity-0', 'pointer-events-none');
        modal.classList.add('opacity-100', 'scale-100');
        overlay.classList.add('opacity-50');
    });

    closeModalButton.addEventListener('click', () => {
        modal.classList.remove('opacity-100', 'scale-100');
        overlay.classList.remove('opacity-50');
        setTimeout(() => {
            modal.classList.add('opacity-0', 'pointer-events-none', 'scale-95');
            overlay.classList.add('opacity-0', 'pointer-events-none');
        }, 300);
    });
    </script>
@endpush
