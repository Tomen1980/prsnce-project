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

   <div class="w-full relative h-[120vh] lg:h-[110vh] border-2">
        <img src="img/bg-login.png" alt="" class="object-cover w-full h-full">
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <div class="absolute top-0  w-full flex">
         <div class="w-1/2">
            <img src="img/logo-dashboard.png" alt="" class="" class="object-cover w-full ">
         </div>
         <div class="w-1/2">
            <div class=" w-[15%] lg:w-[10%] xl:w-[6%] bg-slate-700 h-[150px] sm:h-[200px] md:h-[250px] lg:h-[200px] rounded-b-full fixed top-0 right-5 z-10"
            id="profile">
            <div>
                <img src="img/profile.png" alt="Profile Image"
                    class="object-cover w-[70%] mx-auto mt-5 h-full rounded-full">
                <img src="img/hand.png" alt="Profile Image" class="object-cover w-[70%] mx-auto h-full">
            </div>
        </div>
         </div>
        </div>

        <div class=" border-2 bg-white absolute inset-6 mt-36 rounded-xl md:p-5 my-10 md:space-y-5 lg:space-y-10">
            <h1 class="text-3xl font-semibold text-center font-fredoka mb-5 md:text-4xl lg:text-6xl">Data Peserta Baru</h1>
            <div>
               <p class="font-fredoka font-semibold text-input-primary md:text-xl lg:text-2xl">Data Peserta</p>
               {{-- <div class="flex flex-col space-y-2 lg:flex-row lg:flex-wrap border-2"> --}}
               <div class="grid grid-cols-1 gap-2 md:grid-cols-2 ">
                  <input type="text" name="name" id="name" class="w-full lg:h-14  border-2 text-white font-fredoka text-semibold bg-input-primary rounded-lg p-2 placeholder:text-input-placeholder placeholder:font-semibold placeholder:font-fredoka" placeholder="Nama">
                  <input type="text" name="nip" id="name" class="w-full lg:h-14  border-2 text-white font-fredoka text-semibold bg-input-primary rounded-lg p-2 placeholder:text-input-placeholder placeholder:font-semibold placeholder:font-fredoka" placeholder="NIP">
                  <input type="text" name="instansi" id="name" class="w-full lg:h-14 border-2 text-white font-fredoka text-semibold bg-input-primary rounded-lg p-2 placeholder:text-input-placeholder placeholder:font-semibold placeholder:font-fredoka" placeholder="Instansi">
                  <select name="tipePeserta" id="" class="w-full lg:h-14 border-2 text-input-placeholder font-fredoka text-semibold bg-input-primary rounded-lg p-2 placeholder:text-input-placeholder placeholder:font-semibold placeholder:font-fredoka">
                     <option value="--" selected>Tipe Peserta</option>
                     <option value="smk">SMK</option>
                     <option value="mahasiswa">Mahasiswa</option>
                  </select>
               </div>
            </div>
            <div class="">
               <p class="font-fredoka font-semibold text-input-primary lg:text-2xl">Data Login</p>
               <div class="grid grid-cols-1 gap-2 md:grid-cols-2">
                  <input type="text" name="email" id="name" class="w-full lg:h-14  border-2 text-white font-fredoka text-semibold bg-input-primary rounded-lg p-2 placeholder:text-input-placeholder placeholder:font-semibold placeholder:font-fredoka" placeholder="Email">
                  <input type="text" name="password" id="name" class="w-full lg:h-14  border-2 text-white font-fredoka text-semibold bg-input-primary rounded-lg p-2 placeholder:text-input-placeholder placeholder:font-semibold placeholder:font-fredoka" placeholder="Password">
                  <input type="text" name="passwordVerify" id="name" class="w-full lg:h-14  border-2 text-white font-fredoka text-semibold bg-input-primary rounded-lg p-2 placeholder:text-input-placeholder placeholder:font-semibold placeholder:font-fredoka" placeholder="Konfirmasi Password">
               </div>
            </div>
            <button class="w-[40%] mx-auto block bg-black h-12 text-white font-fredoka font-semibold mt-5 rounded-xl shadow-lg">Simpan</button>
        </div>
        <a href="/dashboard" class="absolute bottom-5 left-5 border-2 py-1 px-5 md:py-2 md:px-10 rounded-lg text-white font-semibold font-fredoka bg-[#990D26] "> Kembali </a>
    </div>
</section>

@include('Layouts.footer')

@endsection