  <!-- Modal Section -->
  <div id="absenModal" class="fixed inset-0 flex items-center justify-center z-20 hidden bg-black bg-opacity-50 ">
    <div class="bg-slate-700 p-5 rounded-2xl shadow-lg w-[80%] md:w-[60%] lg:w-[40%] animate-slide-down relative ">
        <button id="closeModalAbsen" class="absolute top-0 right-0 text-white font-semibold rounded-bl-lg rounded-tr-lg font-fredoka py-2 px-3  bg-red-500">X</button>
        <div class="text-center text-white space-y-3 p-5">
            <h2 class="text-lg font-bold">Absen</h2>
            <div class="p-5 w-full border-2 flex justify-center flex-col gap-5 md:flex-row">
                <form action="/absen" method="POST" class="w-full h-[25vh] bg-emerald-500 rounded-lg flex justify-center items-center hover:bg-emerald-900">
                    @csrf
                    @method('POST')
                    <button type="submit">
                        <h2 class="text-lg font-bold">Presensi</h2>
                    </button>
                </form>
                <a href="/formIzin" class="w-full h-[25vh] bg-yellow-300 rounded-lg flex justify-center items-center hover:bg-yellow-600">
                    
                        <h2 class="text-lg font-bold">Izin</h2>
                    
                </a>
               
            </div>

        </div>
       
    </div>
    {{-- <div id="modalBackdrop" class="fixed inset-0 bg-black opacity-50"></div> --}}
</div>


