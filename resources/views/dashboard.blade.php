@extends('Layouts.app')

@section('content')
    @if (session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
            {{ session()->get('success') }}
        </div>
    @endif


    <style>
        /* Animation */
        .animate-slide-down {
            animation: slideDown 0.5s ease-out forwards;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Modal Styling */
        #profileModal {
            display: none;
            /* Hide the modal initially */
        }

        /* Show Modal */
        #profileModal.active {
            display: flex;
        }
    </style>



    <section class="bg-white mb-5">

        <section>

            <!-- Modal Section -->
            <div id="profileModal" class="fixed inset-0 flex items-center justify-center z-20 hidden ">
                <div class="bg-slate-700 p-5 rounded-2xl shadow-lg w-[80%] md:w-[60%] lg:w-[40%] animate-slide-down">
                    <div class="text-center text-white space-y-3">
                        <img src="img/profile.png" alt="Profile Image" class="w-[100px] h-[100px] rounded-full mx-auto mb-3">
                        <h2 class="text-lg font-bold">John Doe</h2>
                        <div class="flex w-[40%] mx-auto">
                            <div class="w-[40%] h-10 ">
                                <label for="" class="text-white">Tipe</label>
                                <p class="w-full bg-[#712727] rounded-l-lg">Intern</p>
                            </div>
                            <div class="w-[60%] h-10 ">
                                <label for="" class="text-white">Unit</label>
                                <p class="w-full bg-input-primary rounded-r-lg">Marketing</p>
                            </div>
                        </div>
                        <div class="w-[40%] mx-auto ">
                            <label for="" class="text-white">Instansi</label>
                            <p class="w-full bg-input-primary rounded-r-lg">ABC Corporation</p>
                        </div>
                        <div class="w-[40%] mx-auto ">
                            <label for="" class="text-white">Mentor</label>
                            <p class="w-full bg-input-primary rounded-r-lg">Jane Smith</p>
                        </div>
                        <button id="closeModal" class="mt-5 bg-red-500 text-white px-4 py-2 rounded">Exit</button>
                    </div>
                </div>
                <div id="modalBackdrop" class="fixed inset-0 bg-black opacity-50"></div>
            </div>

            <div class="w-full h-[350px] lg:h-[400px] xl:h-[500px]  relative">
                <!-- Gambar Latar Belakang -->
                <img src="img/bg-login.png" alt="Background Image" class="object-cover w-full h-full ">
                {{-- Pop up Profile --}}

                <div class=" w-[15%] lg:w-[10%] xl:w-[6%] bg-slate-700 h-[150px] sm:h-[200px] md:h-[250px] lg:h-[200px] rounded-b-full fixed top-0 right-5 z-10"
                    id="profile">
                    <div>
                        <img src="img/profile.png" alt="Profile Image"
                            class="object-cover w-[70%] mx-auto mt-5 h-full rounded-full">
                        <img src="img/hand.png" alt="Profile Image" class="object-cover w-[70%] mx-auto h-full">
                    </div>
                </div>

                <div class="absolute inset-0 flex ">
                    <div class="w-full relative md:w-1/2">
                        <div class="absolute inset-0 bg-black opacity-50"></div>
                        <div class="absolute inset-0 p-5">
                            <div class="flex items-center justify-center">
                                <img src="img/logo-dashboard.png" alt="Logo Dashboard"
                                    class="w-[85%] md:w-[60%] lg:w-1/2 xl:w-[40%]">
                            </div>
                            <p
                                class="text-white font-fredoka font-semibold text-sm text-center md:text-lg lg:text-xl xl:text-2xl">
                                Dirancang untuk memenuhi kebutuhan karyawan dan peserta magang di berbagai organisasi.
                                Dengan fitur yang user-friendly dan efisien, Prsnce memungkinkan pencatatan kehadiran yang
                                akurat serta pembuatan laporan kerja terperinci untuk peserta magang.
                            </p>
                        </div>
                    </div>
                    <div class="hidden md:block md:w-1/2">
                        <img src="img/hero3.png" alt="" class="object-cover w-full ">
                    </div>
                </div>

            </div>

        </section>

        <section class="relative hidden lg:block bg-white ">
            <img src="img/bg-dashboard.jpeg" alt="" class="object-cover w-full">
            <div class="absolute inset-0  flex items-center justify-center ">
                <div class="w-1/2">
                    <img src="img/desk.png" alt="" class="object-cover w-[75%]">
                </div>
                <div class="w-1/2 p-10">
                    <h1 class="text-white font-fredoka font-semibold lg:text-6xl xl:text-7xl mb-5">Hadir? Hadir.</h1>
                    <p class="text-white font-fredoka font-semibold lg:text-xl xl:text-2xl">Menghadirkan solusi terdepan
                        untuk pengelolaan data absensi yang dirancang khusus untuk karyawan dan peserta magang di Witel
                        Lembong. Prsnce mempermudah pencatatan kehadiran dengan sistem yang efisien dan user-friendly,
                        memastikan setiap jam kerja tercatat dengan akurat. Selain itu, Prsnce juga menawarkan fitur
                        pembuatan laporan kerja yang komprehensif untuk peserta magang, membantu memonitor progres dan
                        kinerja mereka secara real-time. Dengan Prsnce, Witel Lembong dapat meningkatkan efisiensi
                        operasional dan memastikan kepatuhan terhadap standar absensi yang telah ditetapkan.</p>
                </div>
            </div>
        </section>

        @if (Auth::user()->role == 'intern')
            <section class="grid grid-cols-1 gap-5 md:grid-cols-8 bg-white my-10">
                <a href="" class="w-full flex justify-center  md:col-span-4">
                    <img src="img/absenMasuk.png" alt="" class="object-cover w-[75%] rounded-lg">
                </a>
                <a href="" class="w-full flex justify-center  md:col-span-4">
                    <img src="img/absenPulang.png" alt="" class="object-cover w-[75%] rounded-lg">
                </a>
                <a href="" class="w-full flex justify-center  md:col-span-3">
                    <img src="img/riwayatAbsensi.png" alt="" class="object-cover w-[75%] rounded-lg md:w-[90%]">
                </a>

                <a href="" class="w-full flex justify-center  md:col-span-3">
                    <img src="img/rules.png" alt="" class="object-cover w-[75%] rounded-lg">
                </a>

                <a href="" class="w-full flex justify-center  md:col-span-2">
                    <img src="img/statistik.png" alt="" class="object-cover w-[75%] rounded-lg">
                </a>
            </section>
        @elseif (Auth::user()->role == '4dm1n')
            <section class="grid grid-cols-1 gap-5 md:grid-cols-8 bg-white my-10">
                <a href="" class="w-full flex justify-center  md:col-span-4">
                    <img src="img/listUnit.png" alt="" class="object-cover w-[75%] rounded-lg">
                </a>
                <a href="" class="w-full flex justify-center  md:col-span-4">
                    <img src="img/listIntern.png" alt="" class="object-cover w-[75%] rounded-lg">
                </a>
                <a href="" class="w-full flex justify-center  md:col-span-3">
                    <img src="img/riwayatAbsensi.png" alt="" class="object-cover w-[75%] rounded-lg md:w-[90%]">
                </a>

                <a href="" class="w-full flex justify-center  md:col-span-3">
                    <img src="img/rules.png" alt="" class="object-cover w-[75%] rounded-lg">
                </a>

                <a href="" class="w-full flex justify-center  md:col-span-2">
                    <img src="img/addPeserta.png" alt="" class="object-cover w-[75%] rounded-lg">
                </a>
            </section>
        @endif
        @include('Layouts.footer')
    </section>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const profileElement = document.getElementById('profile');
            const profileModal = document.getElementById('profileModal');
            const closeModalButton = document.getElementById('closeModal');
            const modalBackdrop = document.getElementById('modalBackdrop');

            // Function to open modal
            const openModal = () => {
                profileModal.classList.add('active');
            };

            // Function to close modal
            const closeModal = () => {
                profileModal.classList.remove('active');
            };

            // Add click event to open modal
            profileElement.addEventListener('click', openModal);

            // Add click event to close modal
            closeModalButton.addEventListener('click', closeModal);
            modalBackdrop.addEventListener('click', closeModal);
        });
    </script>
@endsection
