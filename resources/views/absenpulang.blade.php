@extends('layouts.app')

@section('content')

<section>
    <div class="w-full h-[100vh] bg-white relative">
        <img src="img/bg-login.png" alt="" class="object-cover w-full h-full">
        <div class="absolute inset-0 bg-black opacity-50 lg:bg-black-900"></div>
        <div class="absolute w-full top-0 flex  justify-between">
            <img src="img/mini-logo.png" alt="" class="w-1/2 lg:w-1/4 lg:block lg:h-[155px] ml-6 mt-5 md:w-2/6 md:h-2/4">
            <img src="img/profile.png" alt="" class="w-[15%] lg:w-[8%] mr-5 md:w-[9%] md:h-[9%]">
            {{-- <form action="/absenpulangAction" method="POST"> --}}
        </div>
        <form action="/absenpulangAction" method="POST" class="w-[90%] bg-white mx-auto rounded-xl">
            @csrf
            @method('POST')
            <div class='absolute w-5/6 top-36 left-8 md:top-40 md:left-32 lg:w-2/3 lg:top-56 lg:left-60 md:w-3/4'>
                <div class='w-full bg-[#f4f4f4] rounded-3xl p-4 '>
                    <h2 class='text-[#302E2E] font-fredoka font-medium text-xl text-center mb-4 lg:text-3xl'>Presensi Pulang</h2>
                    <div>
                            <div class="w-full lg:w-2/3  lg:mx-auto bg-[#302E2E] h-14 rounded-t-xl p-4">
                                <h3 class="text-white font-fredoka font-semibold text-l">Deskripsi Presensi</h3>
                            </div>
                            <textarea type='text' name='deskripsi' class="w-full lg:w-2/3 lg:block mx-auto h-72 bg-white rounded-lg placeholder:text-gray-300-500 placeholder:font-fredoka placeholder:font-normal placeholder:pl-2 placeholder:text-sm lg:h-56 md:placeholder:text-lg:" placeholder="isi kegiatan mu hari ini"></textarea>
                    </div>
                    <button type='submit 'class ='w-1/2 bg-[#302E2E] h-14 block mx-auto rounded-2xl text-white font-fredoka font-medium text-xl lg:text-2xl mt-5 lg:w-1/4'>Unggah</button>
                </div>
            </div>
        </form>
    </div>
</section>
{{-- @include('layout') --}}
@endsection