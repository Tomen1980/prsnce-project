  <!-- Modal Section -->
  <div id="statistikModal" class="fixed inset-0 flex items-center justify-center z-20 hidden bg-black bg-opacity-50 ">
      <div class="bg-slate-700 p-5 rounded-2xl shadow-lg w-[80%] md:w-[60%] lg:w-[40%] animate-slide-down relative ">
          <button id="closeModalStatistik"
              class="absolute top-0 right-0 text-white font-semibold rounded-bl-lg rounded-tr-lg font-fredoka py-2 px-3  bg-red-500">X</button>
          <div class="text-center text-white space-y-3 p-5">
              <h2 class="text-lg font-bold">Statistik Presensi</h2>

              <div class="w-full flex justify-center text-white font-fredoka font-semibold h-[25vh]">
                  <div class="w-1/3 p-5 flex flex-col justify-center items-center bg-[#0EA5E9] rounded-l-xl">
                      <h3 id="{{ $totalHadir !== 0 ? 'totalHadir' : '' }}" class="text-7xl font-semibold">{{ $totalHadir }}</h3>
                      <h2 class="text-2xl font-semibold ">Hadir</h2>

                  </div>
                  <div class="w-1/3 p-5  flex flex-col justify-center items-center bg-[#C5C906]">
                      <h3 id="{{ $totalAlfa !== 0 ? 'totalAlfa' : '' }}" class="text-7xl font-semibold">{{ $totalAlfa }}</h3>
                      <h2 class="text-2xl font-semibold ">Alfa</h2>
                  </div>
                  <div class="w-1/3 p-5  flex flex-col justify-center items-center bg-[#D40505] rounded-r-xl">
                      <h3 id="{{ $totalIzin !== 0 ? 'totalIzin' : '' }}" class="text-7xl font-semibold">{{ $totalIzin }}</h3>
                      <h2 class="text-2xl font-semibold ">Izin</h2>
                  </div>

              </div>
          </div>

      </div>
      {{-- <div id="modalBackdrop" class="fixed inset-0 bg-black opacity-50"></div> --}}
  </div>
