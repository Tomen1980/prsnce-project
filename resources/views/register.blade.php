@extends('layouts.app')

@section('content')
<div class="flex">
    <div class="w-full h-screen md:w-[45%]">
        <div class=" pt-10 px-10 h-[60%] relative z-10">
            <img src="img/new-logo.png" alt="" class="mb-2 lg:mt-10 mx-auto">
            <p class="text-[#8B8B8B] text-md font-semibold font-fredoka lg:text-xl ">Register User</p>
            <form action="/registerAction" method="POST" class="space-y-3 md:space-y-6">
                @csrf
                @method('POST')
                    @if (session()->has('error'))
                        <div class="text-red-500">{{ session()->get('error') }}</div>
                    @endif
                    <div>
                        @error('email')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                        <input type="text" name="email"
                            class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-medium placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg"
                            placeholder="Email">
                    </div>
                    <div>
                        @error('password')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                        <input type="password" name="password"
                            class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-medium placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg"
                            placeholder="Password">
                    </div>
                    <div>
                        @error('password2')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                        <input type="password" name="password2"
                            class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-medium placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg"
                            placeholder="Konfirmasi Password">
                    </div>
                    <div>
                        @error('name')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                        <input type="text" name="name"
                            class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-medium placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg"
                            placeholder="Nama">
                    </div>
                    <div>
                        @error('noTelp')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                        <input type="text" name="noTelp"
                            class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-medium placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg"
                            placeholder="No HP">
                    </div>
                    <button type="submit" class="w-[25%] mx-auto block">
                        <img src="img/register-new-button.png" alt="" class="w-full">
                    </button>
                </form>
            </div>
            {{-- <div class=' bottom-28 border-2'> --}}
                <img src="img/register.png" alt="" class="w-[100%] mt-32 left-8 xl:mt-80  ">
            {{-- </div> --}}
        </div>
        <div class="hidden md:w-[55%] md:block md:h-[106vh] lg:h-[116vh] xl:h-[156vh] 2xl:h-[143vh]">
            <img src="img/bg-login.png" alt="" class="object-cover w-full h-full">
        </div>
        {{-- <div class='flex'>
            <img src='img/register.png'alt>
        </div> --}}
    </div>
</div>
@endsection