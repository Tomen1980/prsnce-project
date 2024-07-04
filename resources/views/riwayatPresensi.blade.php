@extends('Layouts.app')

@section('content')
    <section>

        @if (session()->has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                {{ session()->get('success') }}
            </div>
        @endif

        @if (session()->has('error'))
            <div class="bg-green-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                {{ session()->get('error') }}
            </div>
        @endif

        <!-- Modal Section -->
        @include('components.boxModelProfile')

        <div class="w-full relative h-[130vh]">
            <img src="img/bg-login.png" alt="" class="object-cover w-full h-full">
            <div class="absolute inset-0 bg-black opacity-50"></div>

            <div class="absolute w-full top-0 flex justify-between">
                <img src="img/mini-logo.png" alt=""
                    class="w-1/2 lg:w-1/4 lg:block lg:h-[155px] ml-6 mt-5 md:w-2/6 md:h-2/4">
                {{-- <img src="img/profile.png" alt="" class="w-[15%] lg:w-[8%] mr-5 md:w-[9%] md:h-[9%]"> --}}
                <div class="w-[15%] lg:w-[10%] xl:w-[6%] bg-slate-700 h-[150px] sm:h-[200px] md:h-[250px] lg:h-[200px] rounded-b-[30px] fixed top-0 right-5 z-10"
                    id="profile">
                    <div>
                        <img src="{{ Storage::url('users/' . Auth::user()->image) }}" alt="Profile Image"
                            class="object-cover w-[70%] mx-auto mt-5 h-full rounded-full">
                        <img src="img/hand.png" alt="Profile Image" class="object-cover w-[70%] mx-auto h-full">
                    </div>
                </div>
            </div>

            <div class="border-2 bg-white absolute inset-6 mt-36 rounded-xl md:p-5 my-14">
                <div class="flex flex-col flex-wrap items-center lg:flex-row lg:w-full lg:justify-between">
                    <h1 class="text-2xl mt-5 font-semibold text-center font-fredoka mb-5 md:text-4xl lg:text-4xl">Riwayat
                        Presensi</h1>
                    <div class="w-[90%] lg:w-1/2">
                        <div class="flex  bg-[#353535] rounded-lg items-center">
                            <input type="text" placeholder="Search" id="search" name="search"
                                value="{{ isset($search) ? $search : '' }}"
                                class=" w-[90%] h-10 outline-none bg-[#353535] rounded-lg block mx-auto placeholder:text-white placeholder:font-fredoka placeholder:font-semibold placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg">
                            <div class="w-[10%] flex justify-center">
                                <img src="/img/loop.png" alt=""
                                    class="object-cover w-[30px] md:w-[40px] lg:w-[40px]">
                            </div>
                        </div>
                    </div>
                </div>
                <p class="hidden lg:block font-fredoka text-input-primary text-justify lg:text-xl my-5">
                    PRSNCE. akan memperlihatkan riwayat kehadiranmu disini!
                </p>
                <!-- Table -->
                <div id="item-list" class="w-full h-[70%] overflow-y-auto ">

                    @forelse ($absenData as $item)
                        <div class="flex w-[85%] mt-10 h-[100px]  justify-center items-center m-auto  border-red-400">
                            <div class="relative flex w-[80%] lg:w-full h-full bg-[#393939]  p-3 rounded-2xl  items-center">
                                <div class="w-[50%] lg:w-[40%] xl:w-[30%]  lg:h-full pl-3">
                                    <label for="" class="text-[#B1ADAD] font-fredoka font-semibold">Tanggal</label>
                                    <p class="w-full lg:w-[60%] text-white font-fredoka bg-[#777777] rounded-lg p-1">
                                        {{ $item->tanggal }}</p>
                                </div>

                                <div class="w-[50%] lg:hidden pr-3">
                                    <label for=""
                                        class="text-[#B1ADAD] font-fredoka font-semibold ">Keterangan</label>
                                    <p class="w-full text-white font-fredoka bg-[#712727] rounded-lg p-1">
                                        {{ $item->status }}</p>
                                </div>


                                <div class="hidden lg:flex w-[60%] xl:w-[70%]  h-full ">
                                    <div class="w-[40%]  ">
                                        <label for=""
                                            class="text-[#B1ADAD] font-fredoka font-semibold">Keterangan</label>
                                        <p class="w-full text-white font-fredoka bg-[#712727] rounded-l-lg p-1">
                                            {{ $item->status }}
                                        </p>
                                    </div>
                                    <div class="w-[60%]  overflow-y-auto">
                                        <label for=""
                                            class="text-[#B1ADAD] font-fredoka font-semibold">Deskripsi</label>
                                        <p class="w-full text-white font-fredoka bg-[#777777] rounded-r-lg p-1">
                                            {{ $item->keterangan }} </p>
                                    </div>
                                </div>

                            </div>
                            @if ($item->status == 'Hadir')
                                <a href=""
                                    class=" lg:w-[5%] md:w-[8%] h-[70px] bg-[#0EA5E9] border-2 rounded-r-2xl p-2 ">
                                    <img src="img/logo-tangan.png" alt="" class="object-cover w-full h-full ">
                                </a>
                            @elseif ($item->status == 'Izin')
                                <a href=""
                                    class=" w-[53px] lg:w-[5%] md:w-[8%] h-[70px] bg-[#D40505] border-2 rounded-r-2xl p-2 ">
                                    <img src="img/izin.png" alt="" class="object-cover w-[70px] h-[30px] mt-3  ">
                                </a>
                            @elseif ($item->status == 'Alfa')
                                <a href=""
                                    class=" w-[53px] lg:w-[5%] md:w-[8%] h-[70px] bg-[#C5C906] border-2 rounded-r-2xl p-2 ">
                                    {{-- <img src="img/tandatanya.png" alt="" class="object-cover w-[25px] h-[25px] mt-3 "> --}}
                                    <p class='font-fredoka bold text-white font-bold text-5xl text-center'>?</p>
                                </a>
                            @endif
                        </div>

                    @empty
                        <p>Tidak ada data</p>
                    @endforelse
                </div>
                <!-- End Table -->
                <div class='flex bg-[#0EA5E9] w-[50px] h-[50px] justify-center items-center rounded-md border-2 absolute bottom-5 left-5'>
                    <img src='img/printer.png'  class='object-cover w-[70%]'>
                </div>
            </div>
            <a href="/dashboard"
                class="absolute bottom-5 left-5 py-1 px-5 md:py-2 md:px-10 rounded-lg text-white font-semibold font-fredoka bg-[#990D26]">Kembali</a>
        </div>
    </section>

    @include('Layouts.footer')


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#search, #date').on('keyup change', function() {
            var search = $('#search').val();
            // var date = $('#date').val();
            $.ajax({
                url: '{{ route('searchRiwayat') }}',
                type: 'GET',
                data: {
                    'search': search,
                },
                success: function(data) {
                    $('#item-list').html(data);
                },
                error: function(xhr) {
                    console.error('Request failed:', xhr.responseText);
                }
            });
        });
    });
</script>
@endsection
