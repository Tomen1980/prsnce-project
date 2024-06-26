{{-- Foreach --}}
@forelse ($user as $item)
    <div class="flex w-[85%] justify-end items-center ">
        <div class="relative flex mt-5 w-[80%] bg-input-primary  p-3 rounded-2xl border-2 items-center overflow-x-auto">
            <div class="w-[20%] md:w-[10%]">
                <div class="w-[60px] h-[60px] rounded-full md:w-[70px] md:h-[70px] mx-auto">
                    <img src="img/profile.png" alt="Profile Image" class="object-cover w-full h-full ">
                </div>
            </div>
            <div class="ml-10 w-[80%] md:ml-5 md:w-[90%]">
                <h3 class="text-lg font-semibold font-fredoka text-white">{{ $item->name }}</h3>

                <div class="mb-5 space-x-5 hidden md:flex">
                    <div class="flex md:w-[250px]">
                        <div class="w-[40%] h-10 ">
                            <label for="" class="text-white font-fredoka font-semibold">Tipe</label>
                            <p class="w-full text-white font-fredoka bg-[#712727] rounded-l-lg p-1">
                                {{ $item->pesertaKP }}
                            </p>
                        </div>
                        <div class="w-[60%] h-10 ">
                            <label for="" class="text-white font-fredoka font-semibold">Unit</label>
                            <p class="w-full text-white font-fredoka bg-input-placeholder rounded-r-lg p-1">
                                {{ $item->unitType }}</p>
                        </div>
                    </div>
                    <div>
                        <label for="" class="text-white font-fredoka font-semibold">Instansi</label>
                        <p class="w-full text-white font-fredoka bg-input-placeholder rounded-lg p-1">
                            {{ $item->instansi }}</p>
                    </div>
                    <div>
                        <label for="" class="text-white font-fredoka font-semibold">Mentor</label>
                        <p class="w-full text-white font-fredoka bg-input-placeholder rounded-lg p-1">
                            {{ $item->mentor }}</p>
                    </div>
                </div>

                <div class="hidden md:block md:absolute top-3 right-3">
                    <form action="{{ route('deletePeserta', ['id' => $item->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="w-[30px] h-[30px] lg:w-[40px] lg:h-[40px] bg-red-500 p-1 rounded-lg">
                            <img src="img/sampahIcon.png" alt="" class="object-cover w-full h-full ">
                        </button>
                    </form>
                </div>

                <div class="flex gap-3 md:hidden">
                    <form action="{{ route('deletePeserta', ['id' => $item->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="w-[30px] h-[30px] bg-red-500 p-1 rounded-lg">
                            <img src="img/sampahIcon.png" alt="" class="object-cover w-full h-full ">
                        </button>
                    </form>
                    <a href="/detailPeserta/{{ $item->id }}">
                        <div class="w-[30px] h-[30px] bg-sky-500 p-1 rounded-lg">
                            <img src="img/pensilIcon.png" alt="" class="object-cover w-full h-full ">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <a href="/detailPeserta/{{ $item->id }}"
            class="hidden md:block lg:w-[5%] md:w-[8%] h-[70px] bg-sky-500 border-2 rounded-r-2xl p-2">
            <img src="img/pensilIcon.png" alt="" class="object-cover w-full h-full ">
        </a>
    </div>
@empty
    <p>Tidak ada data</p>
@endforelse
{{-- EndForeach --}}
