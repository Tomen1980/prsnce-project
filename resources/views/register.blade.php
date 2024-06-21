@extends('layouts.app')

@section('content')
<div class="flex">
    <div class="w-full h-screen md:w-1/2">
        <div class="mt-10 pt-10 px-10 h-[60%] relative z-10">
            <img src="img/logo.png" alt="" class="mb-2 lg:mt-10 mx-auto">
            <p class="text-[#8B8B8B] text-md font-semibold font-fredoka mb-2 lg:text-xl">Register User</p>
            <form action="" class="space-y-5 md:space-y-10">
                <input type="text"name="email" class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-semibold placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg" placeholder="Email">

                <input type="password" name="password" class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-semibold placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg" placeholder="Password">
                
                <input type="text" name ="name" class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-semibold placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg" placeholder="Name">
                
                <input type="text" name="NoTelp" class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-semibold placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg" placeholder="No HP">    

                <button type="submit" class="w-[25%] mx-auto block">
                    <img src="img/register_button.jpg" alt="" class="w-full">
                </button>
            </form>
        </div>

        <div class="w-full h-[40%] relative lg:h-[35%] xl:h-[47%] 2xl:h-[65%] 2xl:mt-3 z-0">
            <img src="img/hero.png" alt="" class="w-1/2 absolute bottom-0 left-0 xl:w-[40%]">
            <img src="img/hero1.png" alt="" class="w-1/2 absolute bottom-0 right-0 xl:w-[40%]">
        </div>
    </div>
    <div class="hidden md:w-1/2 md:block">
        <img src="img/bg-login.png" alt="" class="object-cover w-full h-full">
    </div>
</div>
@endsection