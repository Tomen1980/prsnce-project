    @extends('Layouts.app')

    @section('content')

    <section>
        <div class="w-full h-[100vh] bg-white relative">
            <img src="img/bg-login.png" alt="" class="object-cover w-full h-full">
            <div class="absolute inset-0 bg-black opacity-50 lg:bg-black-900"></div>
            <div class="absolute w-full top-0 flex  justify-between">
                <img src="img/mini-logo.png" alt="" class="w-1/2 lg:w-1/4 lg:block lg:h-[155px] ml-6 mt-5 md:w-2/6 md:h-2/4">
                <img src="img/profile.png" alt="" class="w-[15%] lg:w-[8%] mr-5 md:w-[9%] md:h-[9%]">
            </div>
            <form action="/absenpulangAction" method="POST" class="w-[90%] bg-white mx-auto rounded-xl">
                @csrf
                @method('POST')
                <div class='absolute w-5/6 top-36 left-8 md:top-40 md:left-32 lg:w-2/3 lg:top-56 lg:left-60 md:w-3/4'>
                    <div class='w-full bg-[#f4f4f4] rounded-xl p-3  '>
                        <input type="text" name="" class="w-full h-10 bg-[#302E2E] rounded-md placeholder:text-white placeholder:font-fredoka placeholder:pb-2 placeholder:font-medium placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg" placeholder="search"> 
                        <h2 class='text-[#302E2E] font-fredoka font-medium text-xl text-left mt-1 mb-1 lg:text-3xl'>List Unit Intern</h2>
                        <p class='text-[909090] font-fredoka medium text-sm hidden'>Selamat datang di menu List Unit/Divisi Prsnce yang memudahkan Anda untuk melihat dan mengelola informasi mengenai berbagai unit atau divisi di Witel Telkom Lembong.</p>
                        <div>
                            {{-- <img src='img/unit 1.png' alt='' class='w-1/2 h-1/2 mx-auto'>
                            <div class='w- bg-[#302E2E] h-14 rounded-xl p-4'> --}}
                        </div>
                        <div class='w-full bg-[#302E2E] h-14 rounded-md p-4 flex justify-between'> 
                            <h2 class='text-white font-fredoka font-medium text-xl lg:text-3xl border-2'>ARNET</h2>
                            <img src='img/edit.png' alt=''class='border-2'>
                            <button type='submit' >
                                <img src='img/sampah.png' alt='' class='w-[14%] border-2'>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    @include('layouts.footer')
    @endsection