  <!-- Modal Section -->
  <div id="profileModal" class="fixed inset-0 flex items-center justify-center z-20 hidden bg-black bg-opacity-50 ">
      <div class="bg-slate-700 p-5 rounded-2xl shadow-lg w-[80%] md:w-[60%] lg:w-[40%] animate-slide-down relative ">
          <button id="closeModal" class="absolute top-4 right-4 text-white py-2 px-3 rounded-lg bg-red-500">X</button>

          <div class="text-center text-white space-y-3 " id="profileContent">
              <img src="{{ Storage::url('users/' . Auth::user()->image) }}" alt="Profile Image"
                  class="w-[100px] h-[100px] rounded-full mx-auto mb-3">
              <div class="flex w-1/2 justify-center items-center mx-auto gap-2">
                  <h2 class="text-lg font-bold">{{ Auth::user()->name }}</h2>
                  <a href="#" id="editProfileButton" class="px-2 bg-[#0EA5E9] rounded-lg">Edit</a>
              </div>
              @if(Auth::user()->role == 'intern')
              <div>

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
            </div>
            @endif
              <form action="/logout" method="POST">
                  @csrf
                  @method('delete')
                  <button type="submit" class="mt-5 bg-[#712727] text-white px-4 py-2 rounded">Logout</button>
              </form>
          </div>

          <div id="formContent" class="text-center text-white space-y-3 hidden">
              <form action="/updateProfile/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="text-center text-white space-y-3">
                      <div class="relative w-24 h-24 mx-auto mb-3  overflow-hidden group">
                          <img id="profile-image" src="{{ Storage::url('users/' . Auth::user()->image) }}"
                              alt="Profile Image" class="object-cover w-full h-full rounded-full">
                          <div
                              class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-opacity duration-300 rounded-full">
                              <input type="file" name="image" id="image"
                                  class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                              <span
                                  class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">Upload</span>
                          </div>
                          <div id="cancel-button"
                              class="absolute top-1 right-1 bg-white p-1 rounded-full hidden group-hover:flex items-center justify-center cross-icon">
                              <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-11.707a1 1 0 00-1.414-1.414L10 7.586 7.707 5.293a1 1 0 10-1.414 1.414L8.586 10l-2.293 2.293a1 1 0 001.414 1.414L10 12.414l2.293 2.293a1 1 0 001.414-1.414L11.414 10l2.293-2.293z"
                                      clip-rule="evenodd"></path>
                              </svg>
                          </div>
                      </div>
                      @error('image')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      <div class="flex w-1/2 justify-center items-center mx-auto gap-2">
                          <h2 class="text-lg font-bold">Edit Profile</h2>
                      </div>
                      <div class="w-[60%] mx-auto">
                          <label for="oldPass" class="text-white">Old Password</label>
                          @error('oldPass')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <input type="text" name="oldPass" id="oldPass"
                              class="w-full bg-input-primary rounded-lg md:p-1 lg:p-2 placeholder:pl-2" value="">
                      </div>
                      <div class="w-[60%] mx-auto">
                          <label for="password" class="text-white">Password</label>
                          @error('password')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <input type="password" name="password" id="password"
                              class="w-full bg-input-primary rounded-lg md:p-1 lg:p-2 placeholder:pl-2" value="">
                      </div>
                      <div class="w-[60%] mx-auto">
                          <label for="passwordVerify" class="text-white">PasswordVerify</label>
                          @error('passwordVerify')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <input type="password" name="passwordVerify" id="passwordVerify"
                              class="w-full bg-input-primary rounded-lg md:p-1 lg:p-2 placeholder:pl-2" value="">
                      </div>
                      <!-- Form input lainnya -->
                      <div class="flex justify-center gap-2">
                          <button type="submit" class="mt-5 bg-blue-500 text-white px-4 py-2 rounded">Update</button>
                          <a href="#" id="backButton" type="submit"
                              class="mt-5 bg-red-500 text-white px-4 py-2 rounded">Kembali</a>
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

  <script>
      // Ambil elemen yang diperlukan
      const imageInput = document.getElementById('image');
      const profileImage = document.getElementById('profile-image');
      const cancelButton = document.getElementById('cancel-button');

      // Simpan URL gambar asli
      const originalImageSrc = profileImage.src;

      // Event listener untuk perubahan pada input file
      imageInput.addEventListener('change', function(event) {
          const file = event.target.files[0];
          if (file) {
              const reader = new FileReader();
              reader.onload = function(e) {
                  profileImage.src = e.target.result;
                  cancelButton.classList.remove('hidden'); // Tampilkan tombol silang
              };
              reader.readAsDataURL(file);
          }
      });

      // Event listener untuk tombol silang
      cancelButton.addEventListener('click', function() {
          // Kembalikan gambar ke gambar asli
          profileImage.src = originalImageSrc;
          imageInput.value = ''; // Kosongkan input file
          cancelButton.classList.add('hidden'); // Sembunyikan tombol silang
      });
  </script>
