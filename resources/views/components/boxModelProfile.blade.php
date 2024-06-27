  <!-- Modal Section -->
  <div id="profileModal" class="fixed inset-0 flex items-center justify-center z-20 hidden ">
    <div class="bg-slate-700 p-5 rounded-2xl shadow-lg w-[80%] md:w-[60%] lg:w-[40%] animate-slide-down relative ">
        <button id="closeModal" class="absolute top-4 right-4 text-white py-2 px-3 rounded-lg bg-red-500">X</button>
      
        <div class="text-center text-white space-y-3 " id="profileContent">
            <img src="/img/profile.png" alt="Profile Image" class="w-[100px] h-[100px] rounded-full mx-auto mb-3">
            <div class="flex w-1/2 justify-center items-center mx-auto gap-2">
                <h2 class="text-lg font-bold">{{Auth::user()->name}}</h2>
                <a href="#" id="editProfileButton" class="px-2 bg-[#0EA5E9] rounded-lg">Edit</a>
            </div>
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
                <p class="w-full bg-input-primary rounded-lg">ABC Corporation</p>
            </div>
            <div class="w-[40%] mx-auto ">
                <label for="" class="text-white">Mentor</label>
                <p class="w-full bg-input-primary rounded-lg">Jane Smith</p>
            </div>
            <form action="/logout" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="mt-5 bg-[#712727] text-white px-4 py-2 rounded">Logout</button>
            </form>
        </div>

        <div id="formContent" class="text-center text-white space-y-3 hidden"  >
            <form action="/updateProfile/{{Auth::user()->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="text-center text-white space-y-3">
                    <img src="/img/profile.png" alt="Profile Image" class="w-[100px] h-[100px] rounded-full mx-auto mb-3">
                    <div class="flex w-1/2 justify-center items-center mx-auto gap-2">
                        <h2 class="text-lg font-bold">Edit Profile</h2>
                    </div>
                    <div class="w-[60%] mx-auto">
                        <label for="oldPass" class="text-white">Old Password</label>
                        <input type="text" name="oldPass" id="oldPass" class="w-full bg-input-primary rounded-lg md:p-1 lg:p-2 placeholder:pl-2">
                    </div>
                    <div class="w-[60%] mx-auto">
                        <label for="password" class="text-white">Password</label>
                        <input type="text" name="password" id="password" class="w-full bg-input-primary rounded-lg md:p-1 lg:p-2 placeholder:pl-2">
                    </div>
                    <div class="w-[60%] mx-auto">
                        <label for="passwordVerify" class="text-white">PasswordVerify</label>
                        <input type="text" name="passwordVerify" id="passwordVerify" class="w-full bg-input-primary rounded-lg md:p-1 lg:p-2 placeholder:pl-2">
                    </div>
                    <!-- Form input lainnya -->
                    <div class="flex justify-center gap-2">
                        <button type="submit" class="mt-5 bg-blue-500 text-white px-4 py-2 rounded">Update</button>
                        <a href="#" id="backButton" type="submit" class="mt-5 bg-red-500 text-white px-4 py-2 rounded">Kembali</a>
                    </div>
                </div>
            </form>
            <form action="/logout" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="mt-5 bg-[#712727] text-white px-4 py-2 rounded">Logout</button>
            </form>
        </div>
    </div>
    {{-- <div id="modalBackdrop" class="fixed inset-0 bg-black opacity-50"></div> --}}
</div>