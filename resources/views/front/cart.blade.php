@extends('front.layout.app')

@section('title', 'Cart')

@section('content')
    <section class="max-w-screen-xl mx-auto">
        <div class="flex flex-col justify-around p-6 lg:px-24">
            <h2 class="mb-10 font-semibold text-gray-800 lg:w-3/5 lg:text-3xl">Keranjang Pemesanan</h2>
            <div class="grid grid-cols-1 gap-6 mt-4 mb-10 md:grid-cols-5">
                <!-- Ringkasan Pemesanan -->
                <div class="col-span-5 p-6 bg-gray-100 shadow-md">
                    <form>
                        <div class="flex justify-between mb-8">
                            <div class="flex gap-4">
                                <img class="" src="{{ asset('image/img-cart.png') }}" alt="">
                                <div class="">
                                    <h2 class="text-xl font-medium">Standard Room</h2>
                                    <div class="flex">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.7316 0.666687L10.7896 7.00069L17.4496 7.00069L12.0616 10.9153L14.1196 17.2493L8.7316 13.3347L3.34357 17.2493L5.40162 10.9153L0.0135899 7.00069L6.67356 7.00069L8.7316 0.666687Z" fill="#FFB800"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.7316 0.666687L10.7896 7.00069L17.4496 7.00069L12.0616 10.9153L14.1196 17.2493L8.7316 13.3347L3.34357 17.2493L5.40162 10.9153L0.0135899 7.00069L6.67356 7.00069L8.7316 0.666687Z" fill="#FFB800"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.7316 0.666687L10.7896 7.00069L17.4496 7.00069L12.0616 10.9153L14.1196 17.2493L8.7316 13.3347L3.34357 17.2493L5.40162 10.9153L0.0135899 7.00069L6.67356 7.00069L8.7316 0.666687Z" fill="#FFB800"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.7316 0.666687L10.7896 7.00069L17.4496 7.00069L12.0616 10.9153L14.1196 17.2493L8.7316 13.3347L3.34357 17.2493L5.40162 10.9153L0.0135899 7.00069L6.67356 7.00069L8.7316 0.666687Z" fill="#FFB800"/>
                                        </svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.7316 0.666687L10.7896 7.00069L17.4496 7.00069L12.0616 10.9153L14.1196 17.2493L8.7316 13.3347L3.34357 17.2493L5.40162 10.9153L0.0135899 7.00069L6.67356 7.00069L8.7316 0.666687Z" fill="#FFB800"/>
                                        </svg>
                                        <span class="text-gray-500 ms-1">(172)</span>
                                    </div>
                                    <h2 class="text-[17px] font-normal">Fasilitas</h2>
                                    <ul class="grid grid-cols-2 text-sm font-light text-gray-800 list-disc list-inside gap-x-4">
                                        <li>1 Kamar Mandi</li>
                                        <li>High speed wifi</li>
                                        <li>1 Tempat tidur double</li>
                                        <li>Kulkas mini</li>
                                        <li>Sarapan</li>
                                        <li>TV</li>
                                    </ul>
                                    <div class="mt-7">
                                        <h4 class="text-xl font-medium text-gray-800">Rp 400.000<span class="text-sm font-normal text-sub">/malam</span></h4>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span>Status : <span class="text-sub">Menunggu Konfirmasi</span></span>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex gap-4">
                                <div class="">
                                    <h2 class="text-xl font-medium text-gray-800">Detail Pemesanan</h2>
                                    <div class="flex justify-between text-[15px] mt-3">
                                        <div class="flex flex-col font-light text-sub pe-2 gap-y-1">
                                            <span>Check In :</span>
                                            <span>Check Out :</span>
                                            <span>Hotel :</span>
                                            <span>Tambah Rencana Penginapan :</span>
                                            <span>Jumlah Orang :</span>
                                        </div>
                                        <div class="flex flex-col font-medium text-gray-800 gap-y-1">
                                            <span>Minggu, 20.00 - 16 July 2023</span>
                                            <span>Senin, 20.00 - 17 July 2023</span>
                                            <span>Hotel Citra Megah Bali, Standard Room</span>
                                            <span>Spa dan Gebugaran - Dewasa (2)</span>
                                            <span>2 Dewasa, 1 Anak</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="flex flex-col">
                                    <h2 class="text-xl font-medium text-gray-800">Total Pembayaran</h2>
                                    <h2 class="mb-3 text-2xl font-medium text-gray-800">Rp 700.000</h2>
                                    <a href="#">
                                        <button class="px-5 py-2 mt-5 font-normal text-white bg-cyan-950 hover:bg-cyan-900">Batalkan Pemesanan</button>
                                    </a>
                                    <span class="text-sm">Sebelum <span class="text-sub">04 : 24 : 12</span></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
