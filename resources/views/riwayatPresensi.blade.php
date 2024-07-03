@extends('layouts.app')

@section('content') 

<section>
    @include('components.boxModelProfile')
    <div class="w-full h-[110vh] bg-white relative">
        <img src="/img/bg-login.png" alt="" class="object-cover w-full h-full">
        <div class="absolute inset-0 bg-black opacity-50 lg:bg-black-900"></div>
        <div class="absolute w-full top-0 flex  justify-between">
            <img src="/img/mini-logo.png" alt="" class="w-1/2 lg:w-1/4 lg:block lg:h-[155px] ml-6 mt-5 md:w-2/6 md:h-2/4">
            <div class="w-[15%] lg:w-[10%] xl:w-[6%] bg-slate-700 h-[150px] sm:h-[200px] md:h-[250px] lg:h-[200px] rounded-b-[30px] fixed top-0 right-5 z-10"
                        id="profile">
                        <div>
                            <img src="/img/profile.png" alt="Profile Image"
                                class="object-cover w-[70%] mx-auto mt-5 h-full rounded-full">
                            <img src="/img/hand.png" alt="Profile Image" class="object-cover w-[70%] mx-auto h-full">
                        </div>
                </div>
            {{-- <img src="/img/profile.png" alt="" class="w-[15%] lg:w-[8%] mr-5 md:w-[9%] md:h-[9%]"> --}}
            {{-- <form action="/absenpulangAction" method="POST"> --}}
            </div>
            <div class="border-2 bg-white absolute inset-6 mt-36 rounded-xl md:p-5 my-10">
                <div class="flex flex-col flex-wrap items-center md:flex-row lg:w-full md:justify-between ">
                    <h1 class="text-2xl mt-5 font-semibold text-center font-fredoka mb-5 md:text-4xl lg:text-4xl">Riwayat Presensi</h1>
                    <div class=' flex justify-between md:w-1/3 border-2 w-full px-3 '>
                        <div class='flex w-[90%] items-center rounded-lg bg-[#302E2E] '>
                            <input type="text" name="search" id="search" value="{{ isset($search) ? $search : '' }}"
                                class="w-[100%] outline-none md:w-2/3 h-10 text-white pl-2 bg-[#302E2E] rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:pb-2 placeholder:font-medium placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg"
                                placeholder="search">
                            <img src='img/kaca gede.png' alt=''
                                class='object-cover mr-3 md:ml-5 lg:ml-10 w-[25px] lg:w-[40px] bg-[#302E2E] '>
                        </div>
                    </div>
                </div>
                <p class="hidden md:block font-fredoka text-input-primary text-justify lg:text-xl my-5">
                    PRSNCE. membantu Anda memantau kinerja mereka secara real-time, memastikan setiap peserta magang
                    mendapatkan dukungan dan evaluasi yang tepat.
                </p>
                <div class='flex w-[100%] h-[50px] md:h-[75px]  justify-center items-center mt-6 '>
                            <div class='bg-[#393939] w-[85%] md:w-full h-full lg:w-full rounded-lg md:py-2 flex'>
                                <div class='flex  w-[20%] justify-center flex-col'>
                                    <p class='font-fredoka text-[#B1ADAD] text-sm px-2 py-1 hidden md:block ml-5'> Tanggal</p>
                                    <div class='bg-[#777777] w-[150%] h-[44%] rounded-md mx-auto mt-3 justify-center md:mt-0 md:w-[150px] md:ml-5 text-center md:text-left border-2'>
                                        <p class='font-fredoka ml-2 text-white font-medium text-sm'>12/11/2024 </p>
                                    </div>
                                </div>
                                <div class="hidden md:flex w-[80%]">
                                    <div class="w-[120px] flex flex-col ">
                                        <p class='font-fredoka text-[#B1ADAD] text-sm px-2 py-1 hidden  md:block ml-5'> Keterangan</p>
                                        <div class='bg-[#741b1b] w-full h-[44%] rounded-l-md mx-auto text-center md:text-left'>
                                            <p class='font-fredoka ml-2 text-white font-medium text-sm'>Alpha</p>
                                        </div>
                                    </div>
                                    <div class="w-[85%]  flex flex-col">
                                        <p class='font-fredoka text-[#B1ADAD] text-sm px-2 py-1 hidden md:block ml-5'> Deskripsi</p>
                                        <div class='bg-[#777777] w-full h-[44%] rounded-r-md mx-auto text-center md:text-left'>
                                            <p class='font-fredoka ml-2 text-white font-medium text-sm'></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class= 'flex bg-[#0EA5E9] h-[38px] w-[30px] rounded-r-lg items-center border-2'>
                                <img src='/img/logo-tangan.png' alt='' class='w-[25px] h-[30px] '>
                            </div>
                </div>
                </div>
            </div>
                
        </div>
    </div>
</section>
@include('layouts.footer')
@endsection