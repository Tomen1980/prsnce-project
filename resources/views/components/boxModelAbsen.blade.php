  <!-- Modal Section -->
  <div id="absenModal" class="fixed inset-0 flex items-center justify-center z-20 hidden bg-black bg-opacity-50 ">
    <div class="bg-[#2F2F2F] p-5 rounded-2xl shadow-lg w-[80%] md:w-[60%] lg:w-[40%] animate-slide-down relative ">
        <button id="closeModalAbsen" class="absolute top-0 right-0 text-white font-semibold rounded-bl-lg rounded-tr-lg font-fredoka py-2 px-3  bg-red-500"">X</button>
        <div class="text-center text-white space-y-3 p-5">
            <h2 class="text-lg font-semibold font-fredoka">Presensi</h2>
            <div class=" p-5 w-full flex justify-center flex-col md:flex-row">
                <form action="/absen" method="POST" class="w-full h-[25vh] bg-[#0EA5E9]  rounded-t-xl md:rounded-l-xl flex justify-center items-center hover:bg-opacity-50">
                    @csrf
                    @method('POST')
                    <button type="submit">
                        <div class="text-xl font-fredoka font-medium ">
                            <img src='/img/logo-tangan.png' alt=''>
                            <h3> Hadir </h3>
                        </div>
                    </button>   
                </form>
                <div class=" w-full h-[25vh] bg-[#D40505] rounded-b-xl md:rounded-r-xl flex justify-center items-center hover:bg-opacity-50">
                    <button class=" text-white font-fredoka font-medium text-xl">
                        <a href='/izin'>
                            <img src='/img/izin.png' alt='' class=' w-[100px]'>
                            <h3> Izin </h3>
                        </a>
                    </button>
                </div>
            </div>

        </div>
       
    </div>
    {{-- <div id="modalBackdrop" class="fixed inset-0 bg-black opacity-50"></div> --}}
</div>


