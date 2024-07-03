<div id="unitModal" class="fixed inset-0 flex items-center justify-center z-20 hidden bg-black bg-opacity-50">
    <div class="bg-[#2F2F2F] p-5 rounded-lg shadow-lg w-[80%] md:w-[60%] lg:w-[40%] animate-slide-down relative">
        <button id="closeModalUnit"
            class=" absolute top-0 right-0 text-white font-fredoka font-semibold text-xl py-2 px-3 rounded-bl-lg rounded-tr-lg bg-red-500">X</button>
        <form class="text-center text-black space-y-7" id="unitForm">
            @csrf
            @method('POST')
            <input type="hidden" id="unit_id">
            <h2 class="  text-white font-fredoka font-medium text-xl lg:text-2xl text-left">Tambah Unit</h2>
            <div>
                @error('unitType')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                <input id="unitType" name="unitType"
                    class=" w-[80%] h-[35px] rounded-md bg-[#D9D9D9]  placeholder:text-[#777777] placeholder:font-fredoka font-medium text-sm lg:text-lg text-center md:text-left md:pl-2 lg:pl-3 "
                    placeholder='Masukkan unit intern baru!' ></input>
            </div>
            <div class='flex justify-center h-[30px] '>
                <button type='submit'
                    class='bg-[#0A6E9C] w-[10%] lg:w-[10%] xl:w-[7%] rounded-l-md h-full flex justify-center items-center md:w-[7%] lg:md:w-[4%]'>
                    <p class='text-white font-fredoka font-medium text-2xl md:text-3xl'>+</p>
                </button>
                <button type='submit'
                    class='bg-[#0EA5E9] w-[35%] lg:[50%] lg:w-[40%] xl:w-[25%] rounded-r-md flex justify-center items-center md:w-[15%] lg:md:w-[10%]'>
                    <p class='text-white font-fredoka font-medium text-md lg:text-xl'>Tambah</p>
                </button>
            </div>

            <!-- Add your form content here -->
        </form>
    </div>
</div>