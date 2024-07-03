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

        <div class="w-full relative h-[120vh]">
            <img src="img/bg-login.png" alt="" class="object-cover w-full h-full">
            <div class="absolute inset-0 bg-black opacity-50"></div>

            <div class="absolute w-full top-0 flex justify-between">
                <img src="img/mini-logo.png" alt=""
                    class="w-1/2 lg:w-1/4 lg:block lg:h-[155px] ml-6 mt-5 md:w-2/6 md:h-2/4">
                {{-- <img src="img/profile.png" alt="" class="w-[15%] lg:w-[8%] mr-5 md:w-[9%] md:h-[9%]"> --}}
                <div class="w-[15%] lg:w-[10%] xl:w-[6%] bg-slate-700 h-[150px] sm:h-[200px] md:h-[250px] lg:h-[200px] rounded-b-[30px] fixed top-0 right-5 z-10"
                    id="profile">
                    <div>
                        <img src="img/profile.png" alt="Profile Image"
                            class="object-cover w-[70%] mx-auto mt-5 h-full rounded-full">
                        <img src="img/hand.png" alt="Profile Image" class="object-cover w-[70%] mx-auto h-full">
                    </div>
                </div>
            </div>

            <div class="border-2 bg-white absolute inset-6 mt-36 rounded-xl md:p-5 my-10">
                <div class="flex flex-col flex-wrap items-center lg:flex-row lg:w-full lg:justify-between">
                    <h1 class="text-2xl mt-5 font-semibold text-center font-fredoka mb-5 md:text-4xl lg:text-4xl">List
                        Monitor Presensi</h1>
                    <div class="w-[90%] lg:w-1/2">
                        <div class="flex  bg-input-primary rounded-lg items-center">
                            <input type="text" placeholder="Search" id="search" name="search"
                                value="{{ isset($search) ? $search : '' }}"
                                class=" w-[90%] h-10 outline-none bg-input-primary rounded-lg block mx-auto placeholder:text-white placeholder:font-fredoka placeholder:font-semibold placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg">
                            <div class="w-[10%] flex justify-center">
                                <img src="/img/loop.png" alt=""
                                    class="object-cover w-[30px] md:w-[40px] lg:w-[40px]">
                            </div>
                        </div>
                    </div>
                </div>
                <p class="hidden lg:block font-fredoka text-input-primary text-justify lg:text-xl my-5">
                    PRSNCE. akan membantu memantau absensi peserta PKL disini!
                </p>
                <!-- Table -->
                <div id="item-list" class="w-full h-[70%] overflow-y-auto">
                    @include('partial.listMonitor')
                </div>
                {{-- <div class="w-full mx-auto flex justify-center">
                    {{ $data->links() }}
                </div> --}}
                <!-- End Table -->
            </div>
            <a href="/dashboard"
                class="absolute bottom-5 left-5 py-1 px-5 md:py-2 md:px-10 rounded-lg text-white font-semibold font-fredoka bg-[#990D26]">Kembali</a>
        </div>
    </section>

    @include('Layouts.footer')


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var search = $(this).val();
                $.ajax({
                    url: '{{ route('searchMonitor') }}',
                    type: 'GET',
                    data: {
                        'search': search
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
