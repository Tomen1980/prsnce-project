@forelse ($absenData as $item)
    <div class="flex w-[85%] mt-10 h-[100px]  justify-center items-center m-auto ">
        <div class="relative flex w-[80%] lg:w-full h-full bg-[#393939]  p-3 rounded-2xl  items-center ">
            <div class="w-[50%] lg:w-[30%] xl:w-[20%]  lg:h-full pl-3 ">
                <label for="" class="text-[#B1ADAD] font-fredoka font-semibold">Tanggal</label>
                <p class="w-full lg:w-[60%] text-white font-fredoka bg-[#777777] rounded-lg p-1">
                    {{ $item->tanggal }}</p>
            </div>

            <div class="w-[50%] lg:hidden pr-3">
                <label for="" class="text-[#B1ADAD] font-fredoka font-semibold ">Keterangan</label>
                <p class="w-full text-white font-fredoka bg-[#712727] rounded-lg p-1">
                    {{ $item->status }}</p>
            </div>


            <div class="hidden lg:flex w-[70%] xl:w-[80%]  h-full">
                <div class="w-[20%] ">
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
                <div class="w-[20%] flex flex-wrap  justify-center overflow-x-auto gap-2">
                    <div class="w-[40%]">
                        <label for="" class="text-[#B1ADAD] font-fredoka font-semibold">Masuk</label>
                        <p class="w-full text-white font-fredoka bg-[#777777] rounded-lg p-1 text-center">
                            {{ $item->absenMasuk ? $item->absenMasuk : '--' }} </p>
                    </div>
                
                    <div class="w-[40%]">
                        <label for="" class="text-[#B1ADAD] font-fredoka font-semibold">Pulang</label>
                        <p class="w-full text-white font-fredoka bg-[#777777] rounded-lg p-1 text-center">
                            {{ $item->absenPulang ? $item->absenPulang : '--' }} </p>
                    </div>
                </div>
            </div>

        </div>
        @if ($item->status == 'Hadir')
            <a href="" class=" lg:w-[5%] md:w-[8%] h-[70px] bg-[#0EA5E9] border-2 rounded-r-2xl p-2 ">
                <img src="/img/logo-tangan.png" alt="" class="object-cover w-full h-full ">
            </a>
        @elseif ($item->status == 'Izin')
            <a href="" class=" w-[53px] lg:w-[5%] md:w-[8%] h-[70px] bg-[#D40505] border-2 rounded-r-2xl p-2 ">
                <img src="/img/izin.png" alt="" class="object-cover w-[70px] h-[30px] mt-3  ">
            </a>
        @elseif ($item->status == 'Alfa')
            <a href="" class=" w-[53px] lg:w-[5%] md:w-[8%] h-[70px] bg-[#C5C906] border-2 rounded-r-2xl p-2 ">
                {{-- <img src="/img/tandatanya.png" alt="" class="object-cover w-[25px] h-[25px] mt-3 "> --}}
                <p class='font-fredoka bold text-white font-bold text-5xl text-center'>?</p>
            </a>
        @endif
    </div>

@empty
    <p>Tidak ada data</p>
@endforelse
