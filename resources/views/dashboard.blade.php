@extends('Layouts.app')

@section('content')
    @if (session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
            {{ session()->get('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
            {{ session()->get('error') }}
        </div>
    @endif






    <section class="bg-white">

        @include('components.boxModelProfile')
        @include('components.boxModelAbsen')
        @include('components.boxModelRules')
        <section id="wrap">


            <section class="relative">

                <div class="w-full h-[350px] lg:h-[400px] xl:h-[500px]  relative">
                    <!-- Gambar Latar Belakang -->
                    <img src="img/bg-login.png" alt="Background Image" class="object-cover w-full h-full ">
                    {{-- Pop up Profile --}}

                    <div class=" w-[15%] lg:w-[10%] xl:w-[6%] bg-slate-700 h-[150px] sm:h-[200px] md:h-[250px] lg:h-[200px] rounded-b-[30px] fixed top-0 right-5 z-10"
                        id="profile">
                        <div>
                            <img src="{{ Storage::url('users/' . Auth::user()->image) }}" alt="Profile Image"
                                class="object-cover w-[70%] mx-auto mt-5 h-full rounded-full">
                            <img src="img/hand.png" alt="Profile Image" class="object-cover w-[70%] mx-auto h-full">
                        </div>
                    </div>

                    <div class="absolute inset-0 flex ">
                        <div class="absolute inset-0 flex ">
                            <div class="w-full relative md:w-1/2 px-20">
                                <div class="absolute inset-0 bg-black opacity-50"></div>
                                <div class="absolute inset-0 pt-10 px-20 ">
                                    <div class="flex items-center justify-start ">
                                        <img src="img/logo-dashboard.png" alt="Logo Dashboard"
                                            class="w-[85%] md:w-[60%] lg:w-1/2 xl:w-[70%]">
                                    </div>
                                    <p
                                        class="text-white font-fredoka font-medium text-sm text-center md:text-lg lg:text-xl xl:text-md text-justify">
                                        Dirancang untuk memenuhi kebutuhan karyawan dan peserta magang di berbagai organisasi.
                                        Dengan fitur yang user-friendly dan efisien, Prsnce memungkinkan pencatatan kehadiran yang
                                        akurat serta pembuatan laporan kerja terperinci untuk peserta magang.
                                    </p>
                                </div>
                            </div>
                        <div class="hidden md:block md:relative md:w-1/2">
                            <img src="img/hero3.png" alt="" class="object-cover w-full absolute bottom-0 ">
                        </div>
                    </div>

                </div>

            </section>

            <section class="hidden 2xl:block absolute z-10 top-96 -right-32">
                <div class="flex  items-center justify-center ">
                    <div
                        class=" w-[30%] h-full bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 p-10 space-y-7 rounded-3xl">
                        <h1 class="text-white font-fredoka font-semibold xl:text-2xl ">Efisiensi dan Kemudahan Penggunaan
                        </h1>
                        <p class="text-white font-fredoka font-medium xl:text-lg">Prsnce dirancang untuk mempermudah
                            pencatatan kehadiran dengan sistem yang sistematis serta user-friendly, memastikan pengguna
                            dapat mengelola absensi dengan mudah dan cepat.</p>
                    </div>
                    <div class="flex w-[50%] h-[70%]">
                        <div class="bg-[#2F2F2F] w-1/3 p-5 items-center">
                            <h1 class="text-white font-fredoka font-semibold xl:text-2xl mb-5">Pelaporan Komprehensif</h1>
                            <p class="text-white font-fredoka font-medium xl:text-sm">Menawarkan solusi bagi pembuatan
                                laporan kerja yang terperinci untuk peserta magang, membantu dalam memonitor progres dan
                                kinerja</p>
                        </div>
                        <div class="bg-[#424242] w-[45%] p-5 rounded-r-3xl items-center">
                            <h1 class="text-white font-fredoka font-semibold xl:text-2xl mt-3 mb-9">Kepatuhan Terhadap
                                Standar</h1>
                            <p class="text-white font-fredoka font-medium xl:text-sm">Memastikan bahwa perusahaan dapat
                                menjaga kepatuhan terhadap standar absensi yang telah ditetapkan, membantu mengurangi risiko
                                kesalahan pencatatan dan meningkatkan transparansi dalam manajemen kehadiran.</p>
                        </div>
                    </div>

                </div>
            </section>

            <section class="relative hidden lg:block bg-white ">
                <img src="img/bg-dashboard.jpeg" alt="" class="object-cover w-full">
                <div class="absolute inset-0  flex items-center justify-center ">
                    <div class="w-1/2 mt-20 pl-20">
                        <img src="img/desk.png" alt="" class="object-cover w-[95%]">
                    </div>
                    <div class="w-1/2 p-20">
                        <h1 class="text-white font-fredoka font-semibold lg:text-6xl xl:text-7xl mb-5">Hadir? Hadir.</h1>
                        <p class="text-white font-fredoka font-medium lg:text-xl xl:text-md text-justify">Menghadirkan solusi terdepan
                            untuk pengelolaan data absensi yang dirancang khusus untuk karyawan dan peserta magang di Witel
                            Lembong. Prsnce mempermudah pencatatan kehadiran dengan sistem yang efisien dan user-friendly,
                            memastikan setiap jam kerja tercatat dengan akurat. Selain itu, Prsnce juga menawarkan fitur
                            pembuatan laporan kerja yang komprehensif untuk peserta magang, membantu memonitor progres dan
                            kinerja mereka secara real-time. Dengan Prsnce, Witel Lembong dapat meningkatkan efisiensi
                            operasional dan memastikan kepatuhan terhadap standar absensi yang telah ditetapkan.</p>
                    </div>
                </div>
            </section>

        </section>
        @if (Auth::user()->role == 'intern')
            <section class="grid grid-cols-1 gap-5 md:grid-cols-8 bg-white my-10 md:w-[90%] lg:w-[75%] mx-auto">
                <a id="{{ $absen ? '' : 'absenButton' }}" href="{{ $absen ? '' : '#' }}"
                    class="w-full flex justify-center  md:col-span-4 relative group">
                    <img src="img/absenMasuk.png" alt=""
                        class="object-cover w-[75%] md:w-full  rounded-lg transition-transform duration-300 ease-in-out transform group-hover:scale-105 group-hover:shadow-xl">
                    @if ($absen)
                        <div class="absolute inset-0 bg-black opacity-50 rounded-lg transition-transform duration-300 ease-in-out transform group-hover:scale-105 group-hover:shadow-xl "
                            onclick="alert('Anda Sudah Absen')"></div>
                    @endif
                </a>
                <a href="{{ $absen && $absen->absenMasuk !== null && $pulang === null ? "/absenpulang/$absen->id" : '#' }}"
                    class="w-full flex justify-center  md:col-span-4 relative group"
                    onclick="if('{{ $pulang !== null }}' === '1') { alert('Hari ini Anda sudah absen pulang'); return false; }">
                     <img src="img/absenPulang.png" alt=""
                           class="object-cover w-[75%] md:w-full md:h-[103%]  rounded-lg transition-transform duration-300 ease-in-out transform group-hover:scale-105 group-hover:shadow-xl">
                     @if (!$absen || $absen->absenMasuk === null || $pulang !== null)
                         <div class="absolute inset-0 bg-black opacity-50 rounded-lg transition-transform duration-300 ease-in-out transform group-hover:scale-105 group-hover:shadow-xl"
                              onclick="event.stopPropagation(); alert('{{ $pulang !== null ? 'Hari ini Anda sudah absen pulang' : ($absen && $absen->absenMasuk === null ? 'Anda Sedang Izin' : 'Anda Perlu Melakukan Absensi ') }}')">
                         </div>
                     @endif
                 </a>
                 
                 
                <a href="" class="w-full flex justify-center md:col-span-3 group">
                    <img src="img/riwayatAbsen.png" alt=""
                        class="object-fill w-[75%] md:w-full md:h-[101%] rounded-lg transition-transform duration-300 ease-in-out transform group-hover:scale-105 group-hover:shadow-xl">
                </a>

                <button class="w-full flex justify-center  md:col-span-3 group" id="openModalRules">
                    <img src="img/rules.png" alt=""
                        class="object-cover w-[75%] md:w-full  rounded-lg transition-transform duration-300 ease-in-out transform group-hover:scale-105 group-hover:shadow-xl">
                </button>

                <a href="" class="w-full flex justify-center  md:col-span-2 group">
                    <img src="img/statistik.png" alt=""
                        class="object-cover w-[75%] md:w-full  rounded-lg transition-transform duration-300 ease-in-out transform group-hover:scale-105 group-hover:shadow-xl">
                </a>
            </section>
        @elseif (Auth::user()->role == '4dm1n')
            <section class="grid grid-cols-1 gap-5  md:grid-cols-8 bg-white my-10  md:w-[90%] lg:w-[75%] mx-auto">
                <a href="/units" class="w-full flex justify-center  md:col-span-4 group">
                    <img src="img/listUnit.png" alt=""
                        class="object-cover w-[75%] md:w-full rounded-lg transition-transform duration-300 ease-in-out transform group-hover:scale-105 group-hover:shadow-xl">
                </a>
                <a href="/listPeserta" class="w-full flex justify-center  md:col-span-4 group">
                    <img src="img/listIntern.png" alt=""
                        class="object-cover w-[75%] md:w-full rounded-lg transition-transform duration-300 ease-in-out transform group-hover:scale-105 group-hover:shadow-xl">
                </a>
                <a href="/" class="w-full flex justify-center  md:col-span-3 group">
                    <img src="img/addUnit.png" alt=""
                        class="object-fill w-[75%] md:w-full rounded-lg transition-transform duration-300 ease-in-out transform group-hover:scale-105 group-hover:shadow-xl">
                </a>

                <button class="w-full flex justify-center  md:col-span-3 group" id="openModalRules">
                    <img src="img/rules.png" alt=""
                        class="object-cover w-[75%] md:w-full rounded-lg transition-transform duration-300 ease-in-out transform group-hover:scale-105 group-hover:shadow-xl">
                </button>

                <a href="/formPeserta" class="w-full flex justify-center  md:col-span-2 group">
                    <img src="img/addPeserta.png" alt=""
                        class="object-cover w-[75%] md:w-full rounded-lg transition-transform duration-300 ease-in-out transform group-hover:scale-105 group-hover:shadow-xl">
                </a>
            </section>
        @endif
        @include('Layouts.footer')

        <!-- Modal Section -->
      

    </section>

    @if (Auth::user()->role == 'intern')
        <script>
            document.addEventListener('DOMContentLoaded', function() {

                const absenModal = document.getElementById('absenModal');
                const closeModalAbsen = document.getElementById('closeModalAbsen');
                const absenButton = document.getElementById('absenButton');

                const openModal = () => {
                    absenModal.classList.remove('hidden');
                };
                const closeModal = () => {
                    absenModal.classList.add('hidden');
                };
                closeModalAbsen.addEventListener('click', closeModal);
                absenButton.addEventListener('click', openModal);


            })
        </script>
    @endif


    <script>
        // Open Modal Rules
            $("#openModalRules").click(function() {
                $("#rulesModal").removeClass("hidden");
            });
    
            // Close Modal Rules
        $("#closeModalRules").click(function() {
            $("#rulesModal").addClass("hidden");
        })
    </script>



@endsection
