@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <div class="flex">
        <div class="w-full h-screen md:w-1/2">
            <div class="mt-10 pt-10 px-10 h-[60%] relative z-10">
                <img src="img/logo.png" alt="" class="mb-2 lg:mt-10 mx-auto">
                <p class="text-[#8B8B8B] text-md font-semibold font-fredoka mb-2 lg:text-xl">Register User</p>
                <form action="/registerAction" method="POST" class="space-y-5 md:space-y-10">
                    @csrf
                    @method('POST')
=======
<div class="flex">
    <div class="w-full h-screen md:w-1/2">
        <div class="mt-10 pt-10 px-10 h-[60%] relative z-10">
            <img src="img/logo.png" alt="" class="mb-2 lg:mt-10 mx-auto">
            <p class="text-[#8B8B8B] text-md font-semibold font-fredoka mb-2 lg:text-xl">Register User</p>
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
                <input type="text" name="email" class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-semibold placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg" placeholder="Email">
            </div>
            <div>
                @error('password')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                <input type="password" name="password" class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-semibold placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg" placeholder="Password">
            </div>
            <div>
                @error('password2')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                <input type="password" name="password2" class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-semibold placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg" placeholder="Konfirmasi Password">    
            </div>
            <div>                
                @error('name')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                <input type="text" name="name" class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-semibold placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg" placeholder="Nama">
            </div>
            <div>
                @error('noTelp')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                <input type="text" name="noTelp" class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-semibold placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg" placeholder="No HP">    
            </div>
                <button type="submit" class="w-[25%] mx-auto block">
                    <img src="img/register_button.jpg" alt="" class="w-full">
                </button>
            </form>
        </div>
>>>>>>> fadlan


                    @if (session()->has('error'))
                        <div class="text-red-500">{{ session()->get('error') }}</div>
                    @endif
                    <div>
                        @error('email')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                        <input type="text" name="email"
                            class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-semibold placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg"
                            placeholder="Email">
                    </div>
                    <div>
                        @error('password')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                        <input type="password" name="password"
                            class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-semibold placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg"
                            placeholder="Password">
                    </div>
                    <div>
                        @error('password2')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                        <input type="password" name="password2"
                            class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-semibold placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg"
                            placeholder="Konfirmasi Password">
                    </div>
                    <div>
                        @error('name')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                        <input type="text" name="name"
                            class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-semibold placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg"
                            placeholder="Nama">
                    </div>
                    <div>
                        @error('noTelp')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                        <input type="text" name="noTelp"
                            class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-semibold placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg"
                            placeholder="No HP">
                    </div>
                    <button type="submit" class="w-[25%] mx-auto block">
                        <img src="img/register_button.jpg" alt="" class="w-full">
                    </button>
                </form>
            </div>
            <div class="hidden md:w-1/2 md:block">
                <img src="img/bg-login.png" alt="" class="object-cover w-full h-full">
            </div>
        </div>
    @endsection
