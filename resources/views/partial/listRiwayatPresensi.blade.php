@forelse ($absenData as $item)
    <div class="flex w-[85%] mt-10 h-[100px]  justify-center items-center m-auto  border-red-400">
        <div class="relative flex w-[80%] lg:w-full h-full bg-[#393939]  p-3 rounded-2xl  items-center">
            <div class="w-[50%] lg:w-[40%] xl:w-[30%]  lg:h-full pl-3">
                <label for="" class="text-[#B1ADAD] font-fredoka font-semibold">Tanggal</label>
                <p class="w-full lg:w-[60%] text-white font-fredoka bg-[#777777] rounded-lg p-1">
                    {{ $item->tanggal }}</p>
            </div>

            <div class="w-[50%] lg:hidden pr-3">
                <label for="" class="text-[#B1ADAD] font-fredoka font-semibold ">Keterangan</label>
                <p class="w-full text-white font-fredoka bg-[#712727] rounded-lg p-1">
                    {{ $item->status }}</p>
            </div>


            <div class="hidden lg:flex w-[60%] xl:w-[70%]  h-full ">
                <div class="w-[40%]  ">
                    <label for="" class="text-[#B1ADAD] font-fredoka font-semibold">Keterangan</label>
                    <p class="w-full text-white font-fredoka bg-[#712727] rounded-l-lg p-1">
                        {{ $item->status }}
                    </p>
                </div>
                <div class="w-[60%]  overflow-y-auto">
                    <label for="" class="text-[#B1ADAD] font-fredoka font-semibold">Deskripsi</label>
                    <p class="w-full text-white font-fredoka bg-[#777777] rounded-r-lg p-1">
                        {{ $item->keterangan }} </p>
                </div>
            </div>

        </div>
        @if ($item->status == 'Hadir')
            <a href="" class=" lg:w-[5%] md:w-[8%] h-[70px] bg-[#0EA5E9] border-2 rounded-r-2xl p-2 ">
                <img src="img/logo-tangan.png" alt="" class="object-cover w-full h-full ">
            </a>
        @elseif ($item->status == 'Izin')
            <a href="" class=" w-[53px] lg:w-[5%] md:w-[8%] h-[70px] bg-[#D40505] border-2 rounded-r-2xl p-2 ">
                <img src="img/izin.png" alt="" class="object-cover w-[70px] h-[30px] mt-3  ">
            </a>
        @elseif ($item->status == 'Alfa')
            <a href="" class=" w-[53px] lg:w-[5%] md:w-[8%] h-[70px] bg-[#C5C906] border-2 rounded-r-2xl p-2 ">
                {{-- <img src="img/tandatanya.png" alt="" class="object-cover w-[25px] h-[25px] mt-3 "> --}}
                <p class='font-fredoka bold text-white font-bold text-5xl text-center'>?</p>
            </a>
        @endif
    </div>

@empty
    <p>Tidak ada data</p>
@endforelse
