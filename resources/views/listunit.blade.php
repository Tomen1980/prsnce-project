    @extends('Layouts.app')

    @section('content')


    <section>
        <div class="w-full h-[130vh] bg-white relative md:h-[150vh]">
            <img src="img/bg-login.png" alt="" class="object-cover w-full h-full ">
            <div class="absolute inset-0 bg-black opacity-50 lg:bg-black-900"></div>
            <div class="absolute w-full top-0 flex  justify-between">
                <img src="img/mini-logo.png" alt="" class="w-1/2 lg:w-1/4 lg:block lg:h-[155px] ml-6 mt-5 md:w-2/6 md:h-2/4">
                <img src="img/profile.png" alt="" class="w-[15%] lg:w-[8%] mr-5 md:w-[9%] md:h-[9%]">
            </div>
            <form action="/" method="POST" class="w-[90%] bg-white mx-auto rounded-xl">
                @csrf
                @method('POST')
                <div class='absolute w-5/6 top-36 left-8 md:top-40 md:left-32 lg:w-2/3 lg:top-56 lg:left-60 md:w-3/4    '>
                    <div class='w-full bg-[#f4f4f4] rounded-xl p-6'>
                      
                        <div class='flex justify-end'>
                            <div class='flex w-[30%]  items-center rounded-xl bg-[#302E2E]'>
                            <input type="text" name="" class="w-full outline-none md:w-2/3 h-10 bg-[#302E2E] rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:pb-2 placeholder:font-medium placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg" placeholder="search">
                            <img src='img/kaca gede.png' alt='' class=' object-cover mr-3 md:ml-5 lg:ml-10 w-[25px] lg:w-[40px] bg-[#302E2E] '>
                            </div>
                        </div>
                        <h2 class='text-[#302E2E] font-fredoka font-medium text-xl text-left mt-1 lg:text-3xl'>List Unit Intern</h2>
                        <p class='text-[909090] font-fredoka medium text-sm hidden mb-7 md:block'>Selamat datang di menu List Unit/Divisi Prsnce yang memudahkan Anda untuk melihat dan mengelola informasi mengenai berbagai unit atau divisi di Witel Telkom Lembong.</p>
                        {{-- <div class='h-screen w-full  overflow-y-auto border-2 border-red'>  --}}
                        <div class='border-2 grid grid-cols-1 gap-2 md:grid-cols-2 md:gap-2 h-[400px] w-full  overflow-y-auto'>
                                <div class='w-full bg-[#302E2E] h-14 rounded-md p-2 border-red-300  '> 
                                    <div class="flex relative w-full border-2 justify-between items-center ">
                                        <h2 class='text-white font-fredoka font-medium text-xl lg:text-3xl '>ARNET</h2>
                                        <div class="flex">
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/edit.png' alt=''class='object-cover w-[30px]'>
                                            </a>
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/sampah.png' alt='' class='object-cover w-[30px]'>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>          
                                <div class='w-full bg-[#302E2E] h-14 rounded-md p-2 border-red-300  '> 
                                    <div class="flex relative w-full border-2 justify-between items-center ">
                                        <h2 class='text-white font-fredoka font-medium text-xl lg:text-3xl '>ARNET</h2>
                                        <div class="flex">
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/edit.png' alt=''class='object-cover w-[30px]'>
                                            </a>
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/sampah.png' alt='' class='object-cover w-[30px]'>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>          
                                <div class='w-full bg-[#302E2E] h-14 rounded-md p-2 border-red-300  '> 
                                    <div class="flex relative w-full border-2 justify-between items-center ">
                                        <h2 class='text-white font-fredoka font-medium text-xl lg:text-3xl '>ARNET</h2>
                                        <div class="flex">
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/edit.png' alt=''class='object-cover w-[30px]'>
                                            </a>
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/sampah.png' alt='' class='object-cover w-[30px]'>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>          
                                <div class='w-full bg-[#302E2E] h-14 rounded-md p-2 border-red-300  '> 
                                    <div class="flex relative w-full border-2 justify-between items-center ">
                                        <h2 class='text-white font-fredoka font-medium text-xl lg:text-3xl '>ARNET</h2>
                                        <div class="flex">
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/edit.png' alt=''class='object-cover w-[30px]'>
                                            </a>
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/sampah.png' alt='' class='object-cover w-[30px]'>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>          
                                <div class='w-full bg-[#302E2E] h-14 rounded-md p-2 border-red-300  '> 
                                    <div class="flex relative w-full border-2 justify-between items-center ">
                                        <h2 class='text-white font-fredoka font-medium text-xl lg:text-3xl '>ARNET</h2>
                                        <div class="flex">
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/edit.png' alt=''class='object-cover w-[30px]'>
                                            </a>
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/sampah.png' alt='' class='object-cover w-[30px]'>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>          
                                <div class='w-full bg-[#302E2E] h-14 rounded-md p-2 border-red-300  '> 
                                    <div class="flex relative w-full border-2 justify-between items-center ">
                                        <h2 class='text-white font-fredoka font-medium text-xl lg:text-3xl '>ARNET</h2>
                                        <div class="flex">
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/edit.png' alt=''class='object-cover w-[30px]'>
                                            </a>
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/sampah.png' alt='' class='object-cover w-[30px]'>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>          
                                <div class='w-full bg-[#302E2E] h-14 rounded-md p-2 border-red-300  '> 
                                    <div class="flex relative w-full border-2 justify-between items-center ">
                                        <h2 class='text-white font-fredoka font-medium text-xl lg:text-3xl '>ARNET</h2>
                                        <div class="flex">
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/edit.png' alt=''class='object-cover w-[30px]'>
                                            </a>
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/sampah.png' alt='' class='object-cover w-[30px]'>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>          
                                <div class='w-full bg-[#302E2E] h-14 rounded-md p-2 border-red-300  '> 
                                    <div class="flex relative w-full border-2 justify-between items-center ">
                                        <h2 class='text-white font-fredoka font-medium text-xl lg:text-3xl '>ARNET</h2>
                                        <div class="flex">
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/edit.png' alt=''class='object-cover w-[30px]'>
                                            </a>
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/sampah.png' alt='' class='object-cover w-[30px]'>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>          
                                <div class='w-full bg-[#302E2E] h-14 rounded-md p-2 border-red-300  '> 
                                    <div class="flex relative w-full border-2 justify-between items-center ">
                                        <h2 class='text-white font-fredoka font-medium text-xl lg:text-3xl '>ARNET</h2>
                                        <div class="flex">
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/edit.png' alt=''class='object-cover w-[30px]'>
                                            </a>
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/sampah.png' alt='' class='object-cover w-[30px]'>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>          
                                <div class='w-full bg-[#302E2E] h-14 rounded-md p-2 border-red-300  '> 
                                    <div class="flex relative w-full border-2 justify-between items-center ">
                                        <h2 class='text-white font-fredoka font-medium text-xl lg:text-3xl '>ARNET</h2>
                                        <div class="flex">
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/edit.png' alt=''class='object-cover w-[30px]'>
                                            </a>
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/sampah.png' alt='' class='object-cover w-[30px]'>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>          
                                <div class='w-full bg-[#302E2E] h-14 rounded-md p-2 border-red-300  '> 
                                    <div class="flex relative w-full border-2 justify-between items-center ">
                                        <h2 class='text-white font-fredoka font-medium text-xl lg:text-3xl '>ARNET</h2>
                                        <div class="flex">
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/edit.png' alt=''class='object-cover w-[30px]'>
                                            </a>
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/sampah.png' alt='' class='object-cover w-[30px]'>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>          
                                <div class='w-full bg-[#302E2E] h-14 rounded-md p-2 border-red-300  '> 
                                    <div class="flex relative w-full border-2 justify-between items-center ">
                                        <h2 class='text-white font-fredoka font-medium text-xl lg:text-3xl '>ARNET</h2>
                                        <div class="flex">
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/edit.png' alt=''class='object-cover w-[30px]'>
                                            </a>
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/sampah.png' alt='' class='object-cover w-[30px]'>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>          
                                <div class='w-full bg-[#302E2E] h-14 rounded-md p-2 border-red-300  '> 
                                    <div class="flex relative w-full border-2 justify-between items-center ">
                                        <h2 class='text-white font-fredoka font-medium text-xl lg:text-3xl '>ARNET</h2>
                                        <div class="flex">
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/edit.png' alt=''class='object-cover w-[30px]'>
                                            </a>
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/sampah.png' alt='' class='object-cover w-[30px]'>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>          
                                <div class='w-full bg-[#302E2E] h-14 rounded-md p-2 border-red-300  '> 
                                    <div class="flex relative w-full border-2 justify-between items-center ">
                                        <h2 class='text-white font-fredoka font-medium text-xl lg:text-3xl '>ARNET</h2>
                                        <div class="flex">
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/edit.png' alt=''class='object-cover w-[30px]'>
                                            </a>
                                            <a href="/editunit"  class='border-2 w-1/2 '>
                                                <img src='img/sampah.png' alt='' class='object-cover w-[30px]'>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>          
                            </div>

                        {{-- </div> --}}
                        {{-- <div class='border-2 grid grid-cols-1 gap-2 md:grid-cols-2 md:gap-2'>
                            <div class='w-full bg-[#302E2E] h-14 rounded-md p-2 border-red-300  '> 
                                <div class="flex relative w-full border-2 justify-between items-center ">
                                    <h2 class='text-white font-fredoka font-medium text-xl lg:text-3xl '>ARNET</h2>
                                    <div class="flex">
                                        <a href="/editunit"  class='border-2 w-1/2 '>
                                            <img src='img/edit.png' alt=''class='object-cover w-[30px]'>
                                        </a>
                                        <a href="/editunit"  class='border-2 w-1/2 '>
                                            <img src='img/sampah.png' alt='' class='object-cover w-[30px]'>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>          
                        </div> --}}
                        <div class='flex  mt-10 h-10 items-center '> 
 
                                        <a href="/nantidiisi" class='bg-[#0A6E9C] w-[10%] rounded-l-md h-full flex justify-center items-center md:w-[7%] lg:md:w-[4%]'>
                                            <p class='text-white font-fredoka font-medium text-2xl md:text-3xl '>+</p>
                                        </a>
                                        <a href="/nantidiisi" class='bg-[#0EA5E9] w-[25%] rounded-r-md h-full flex justify-center items-center md:w-[15%] lg:md:w-[10%]'>
                                            <p class='text-white font-fredoka font-medium text-md lg:text-xl'>Tambah</p>
                                        </a>
                        </div>    
                       
                    </div>
                </div>
            </form>
            <a href="/dashboard"
                class="absolute bottom-5 left-8  py-1 px-5 md:py-2 md:px-10 rounded-lg text-white font-semibold font-fredoka bg-[#990D26] ">
                Kembali </a>
        </div>
    </section>
    @include('layouts.footer')
    @endsection