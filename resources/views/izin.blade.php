@extends('Layouts.app')

@section('content')

<section>
    @include('components.boxModelProfile')
    <div class="w-full h-[110vh] bg-white relative">
        <img src="img/bg-login.png" alt="" class="object-cover w-full h-full">
        <div class="absolute inset-0 bg-black opacity-50 lg:bg-black-900"></div>
        <div class="absolute w-full top-0 flex  justify-between">
            <img src="img/mini-logo.png" alt="" class="w-1/2 lg:w-1/4 lg:block lg:h-[155px] ml-6 mt-5 md:w-2/6 md:h-2/4">
            <div class="w-[15%] lg:w-[10%] xl:w-[6%] bg-slate-700 h-[150px] sm:h-[200px] md:h-[250px] lg:h-[200px] rounded-b-[30px] fixed top-0 right-5 z-10"
                        id="profile">
                        <div>
                            <img src="img/profile.png" alt="Profile Image"
                                class="object-cover w-[70%] mx-auto mt-5 h-full rounded-full">
                            <img src="img/hand.png" alt="Profile Image" class="object-cover w-[70%] mx-auto h-full">
                        </div>
                </div>
            {{-- <img src="img/profile.png" alt="" class="w-[15%] lg:w-[8%] mr-5 md:w-[9%] md:h-[9%]"> --}}
            {{-- <form action="/absenpulangAction" method="POST"> --}}
        </div>
        <form action="/" method="POST" class="w-[90%] bg-white mx-auto rounded-b-xl">
            @csrf
            @method('POST')
            <div class='absolute w-5/6 top-36 left-8 md:top-40 md:left-32 lg:w-2/3 lg:top-56 lg:left-60 md:w-3/4'>
                <div class='w-full bg-[#f4f4f4] rounded-3xl p-4 '>
                    <h2 class='text-[#302E2E] font-fredoka font-medium text-xl text-center mb-4 lg:text-3xl'>Presensi Perizinan</h2>
                    <div>
                            <div class=" flex justify-between w-full lg:w-2/3  lg:mx-auto bg-[#302E2E] h-14 rounded-t-xl p-4">
                                <h3 class="text-white font-fredoka font-semibold text-l">Deskripsi Presensi</h3>
                                {{-- <div class=' w-[30%]  h-full flex  justify-center '> --}}
                                        {{-- <p class= 'text-[#999999] font-fredoka font-medium bg-[#5C5C5C] rounded-l-lg w-full px-2'>Tipe izin</p> --}}
                                        <select name="tipePerizinan" class=' font-fredoka bg-[#5C5C5C] text-[#999999] w-1/3 font-medium text-left outline-none rounded-md '>
                                            <option value=" " selected> tipe Izin</option> 
                                            <option value="Sakit">Sakit</option>
                                            <option value="Kemalangan">Kemalangan</option>
                                            <option value="Cuti">Cuti</option>
                                        </select>
                                {{-- </div> --}}
                            </div>
                            <textarea type='text' name='deskripsi' class="w-full lg:w-2/3 lg:block mx-auto h-72 bg-white rounded-b-xl placeholder:text-gray-300-500 placeholder:font-fredoka placeholder:font-normal placeholder:pl-2 placeholder:text-sm lg:h-56 md:placeholder:text-lg:" placeholder="isi alasan mu"></textarea>
                    </div>
                    <button type='submit 'class ='w-1/2 bg-[#302E2E] h-14 block mx-auto rounded-2xl text-white font-fredoka font-medium text-xl lg:text-2xl mt-5 lg:w-1/4'>Unggah</button>
                </div>
            </div>
        </form>
        <a href="/dashboard"
                class="absolute bottom-5 left-8  py-1 px-5 md:py-2 md:px-10 rounded-lg text-white font-semibold font-fredoka bg-[#990D26] ">
                Kembali </a>
    </div>
</section>
@include('Layouts.footer')
@endsection