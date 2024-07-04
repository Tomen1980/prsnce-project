{{-- Foreach --}}
@forelse ($data as $item)
    <div class="flex w-[85%] justify-end items-center ">
        <div class="relative flex mt-5 w-[80%] bg-input-primary  p-3 rounded-2xl border-2 items-center overflow-x-auto">
            <div class="w-[20%] md:w-[10%]">
                <div class="w-[60px] h-[60px] rounded-full md:w-[70px] md:h-[70px] mx-auto">
                    <img src="{{ Storage::url('users/' . $item->image) }}" alt="Profile Image"
                        class="object-cover w-full h-full ">
                </div>
            </div>
            <div class="ml-10 w-[80%] md:ml-5 md:w-[90%]">
                <h3 class="text-lg font-semibold font-fredoka text-white">{{ $item->name }}</h3>
                <div class="flex flex-col xl:flex-row">


                    @if ($item->total_hadir == 0)
                        @if ($item->total_kehadiran == 0)
                            <div class="flex w-1/3 flex-col">
                                <p class="text-white font-semibold font-fredoka ml-3">Hadir</p>
                                <div class="w-full text-white text-center font-semibold font-fredoka  bg-[#0EA5E9]">0
                                </div>
                            </div>
                        @endif
                        <div class="text-white text-center font-semibold font-fredoka hidden ">0</div>
                    @else
                        @php
                            $persenHadir = round(($item->total_hadir / $item->total_kehadiran) * 100);
                        @endphp
                        <div class="flex w-[{{ $persenHadir }}%]  flex-col">
                            <p class="text-white font-semibold font-fredoka ml-3">Hadir</p>

                            <div class="text-white text-center font-semibold font-fredoka bg-[#0EA5E9] w-full ">
                                {{ $persenHadir }}%</div>
                        </div>
                    @endif




                    @if ($item->total_alfa == 0)
                        @if ($item->total_kehadiran == 0)
                            <div class="flex w-1/3 flex-col">
                                <p class="text-white font-semibold font-fredoka ml-3">Alfa</p>
                                <div class="text-white text-center font-semibold font-fredoka w-full bg-[#C5C906] "> 0
                                </div>
                            </div>
                        @endif
                        <div class="text-white text-center font-semibold font-fredoka hidden ">0</div>
                    @else
                        @php
                            $persenAlfa = round(($item->total_alfa / $item->total_kehadiran) * 100);
                        @endphp
                        <div class="flex w-[{{ $persenAlfa }}%]  flex-col">
                            <p class="text-white font-semibold font-fredoka ml-3">Alfa</p>
                            <div class="text-white text-center font-semibold font-fredoka bg-[#C5C906]  w-full">
                                {{ $persenAlfa }}%</div>
                        </div>
                    @endif




                    @if ($item->total_izin == 0)
                        @if ($item->total_kehadiran == 0)
                            <div class="flex w-1/3 flex-col ">
                                <p class="text-white font-semibold font-fredoka ml-3">Izin</p>
                                <div class="text-white text-center font-semibold font-fredoka w-full bg-[#D40000] "> 0
                                </div>
                            </div>
                        @endif
                        <div class="text-white text-center font-semibold font-fredoka hidden ">0</div>
                    @else
                        @php
                            $persenIzin = round(($item->total_izin / $item->total_kehadiran) * 100);
                        @endphp
                        <div class="flex w-[{{ $persenIzin }}%] flex-col">
                            <p class="text-white font-semibold font-fredoka ml-3">Izin</p>

                            <div
                                class="text-white text-center font-semibold font-fredoka bg-[#D40000]  w-full">
                                {{ $persenIzin }}%</div>
                        </div>
                    @endif


                </div>

            </div>
        </div>
    </div>
@empty
    <p>Tidak ada data</p>
@endforelse
{{-- EndForeach --}}
