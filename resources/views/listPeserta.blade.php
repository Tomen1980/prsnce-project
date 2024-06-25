@extends('Layouts.app')

@section('content')
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

        <div class="w-full relative h-[120vh] lg:h-[110vh] ">
            <img src="img/bg-login.png" alt="" class="object-cover w-full h-full">
            <div class="absolute inset-0 bg-black opacity-50"></div>

            <div class="absolute top-0  w-full flex">
                <div class="w-1/2">
                    <img src="img/logo-dashboard.png" alt="" class="" class="object-cover w-full ">
                </div>
                <div class="w-1/2">
                    <div class=" w-[15%] lg:w-[10%] xl:w-[6%] bg-slate-700 h-[150px] sm:h-[200px] md:h-[250px] lg:h-[200px] rounded-b-[30px] fixed top-0 right-5 z-10"
                        id="profile">
                        <div>
                            <img src="img/profile.png" alt="Profile Image"
                                class="object-cover w-[70%] mx-auto mt-5 h-full rounded-full">
                            <img src="img/hand.png" alt="Profile Image" class="object-cover w-[70%] mx-auto h-full">
                        </div>
                    </div>
                </div>
            </div>

            <div class=" border-2 bg-white absolute inset-6 mt-36 rounded-xl md:p-5 my-10 ">
                <div class="flex flex-col flex-wrap lg:flex-row lg:w-full lg:justify-between">
                    <h1 class="text-2xl mt-5 font-semibold text-center font-fredoka mb-5 md:text-4xl lg:text-4xl">List Peserta
                        Intern</h1>
                    <form action="" class="lg:w-1/2">
                        <input type="text" placeholder="Search"
                            class="w-[80%] h-10 bg-input-primary rounded-lg block mx-auto placeholder:text-white placeholder:font-fredoka placeholder:font-semibold placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg">
                    </form>
                </div>
                <p class="hidden lg:block text-center font-fredoka text-input-primary text-justify lg:text-xl my-5">
                    PRSNCE. membantu Anda memantau kinerja mereka secara real-time, memastikan setiap peserta magang mendapatkan dukungan dan evaluasi yang tepat.
                </p>
                {{-- Table --}}
                <div class="w-full h-[70%]  overflow-y-auto ">
                   {{-- Foreach --}}
                    <div class="flex w-[85%] justify-end items-center ">
                        <div class="relative flex mt-5 w-[80%] bg-input-primary  p-3 rounded-2xl border-2">
                            <div class="w-[60px] h-[60px] rounded-full">
                                <img src="img/profile.png" alt="Profile Image" class="object-cover w-full h-full ">
                            </div>
                            <div class="ml-5 ">
                                <h3 class="text-lg font-semibold font-fredoka text-white">Nama Peserta</h3>

                                <div class="mb-5 space-x-5 hidden md:flex">
                                    <div class="flex">
                                        <div class="w-[40%] h-10 ">
                                            <label for="" class="text-white font-fredoka font-semibold">Tipe</label>
                                            <p class="w-full text-white font-fredoka bg-[#712727] rounded-l-lg p-1">Intern
                                            </p>
                                        </div>
                                        <div class="w-[60%] h-10 ">
                                            <label for="" class="text-white font-fredoka font-semibold">Unit</label>
                                            <p class="w-full text-white font-fredoka bg-input-placeholder rounded-r-lg p-1">
                                                Marketing</p>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="" class="text-white font-fredoka font-semibold">Instansi</label>
                                        <p class="w-full text-white font-fredoka bg-input-placeholder rounded-lg p-1">Telkom
                                            University</p>
                                    </div>
                                    <div>
                                        <label for="" class="text-white font-fredoka font-semibold">Mentor</label>
                                        <p class="w-full text-white font-fredoka bg-input-placeholder rounded-lg p-1">DR.
                                            Marjan Sunarjan</p>
                                    </div>
                                </div>

                                <div class="hidden md:block md:absolute top-3 right-3">
                                    <div class="w-[30px] h-[30px] lg:w-[40px] lg:h-[40px] bg-red-500 p-1 rounded-lg">
                                        <img src="img/sampahIcon.png" alt="" class="object-cover w-full h-full ">
                                    </div>
                                </div>

                                <div class="flex gap-3 md:hidden">
                                    <div class="w-[30px] h-[30px] bg-red-500 p-1 rounded-lg">
                                        <img src="img/sampahIcon.png" alt="" class="object-cover w-full h-full ">
                                    </div>
                                    <div class="w-[30px] h-[30px] bg-sky-500 p-1 rounded-lg">
                                        <img src="img/pensilIcon.png" alt="" class="object-cover w-full h-full ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block lg:w-[5%] md:w-[8%] h-[70px] bg-sky-500 border-2 rounded-r-2xl p-2">
                            <img src="img/pensilIcon.png" alt="" class="object-cover w-full h-full ">
                        </div>
                    </div>
                    {{-- EndForeach --}}
                </div>

                {{-- End Table --}}
            </div>
            <a href="/dashboard"
                class="absolute bottom-5 left-5  py-1 px-5 md:py-2 md:px-10 rounded-lg text-white font-semibold font-fredoka bg-[#990D26] ">
                Kembali </a>
        </div>
    </section>

    @include('Layouts.footer')
@endsection
