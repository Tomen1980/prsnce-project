{{-- @extends('Layouts.app')

@section('content')
    <div class="flex w-full ">
        <div class="full md:w-1/2  ">
            <div class="mt-10 p-10 ">
                <img src="img/logo.png" alt="" class="mb-2">
                <p for="" class="text-[#8B8B8B] text-md font-semibold font-fredoka mb-2">Login User</p>
                <form action="">
                    <div class="space-y-5 ">
                        <input type="text"
                            class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-semibold placeholder:pl-2 placeholder:text-sm"
                            placeholder="Email" name="email">
                       
                            <input type="text"
                            class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-semibold placeholder:pl-2 placeholder:text-sm"
                            placeholder="Password" name="password">
                            <button type="submit" class="w-[30%]  mx-[100px]">
                                <img src="img/btn-login.png" alt="" class="w-full">
                            </button>
                    </div>
                </form>
            </div>
            <div class="flex mt-16">
                <div class="w-1/2">
                    <img src="img/hero.png" alt="" class="object-cover w-full h-full ml-5" >
                </div>
                <div class="w-1/2">
                    <img src="img/hero1.png" alt="" class="object-cover w-full h-full" >
                </div>
            </div>
        </div>
        <div class="md:w-1/2 h-screen hidden">
            <img src="img/bg-login.png" alt="" class="object-cover w-full h-full">
        </div>
    </div>
@endsection --}}


@extends('Layouts.app')

@section('content')

    <div class="flex">
        <div class="w-full h-screen  md:w-1/2">
            <div class="mt-10 pt-10 px-10  h-[60%]">
                <img src="img/logo.png" alt="" class="mb-2 lg:mt-10 mx-auto">
                <p for="" class="text-[#8B8B8B] text-md font-semibold font-fredoka mb-2 lg:text-xl">Login User</p>
                <form action="" class="space-y-5 md:space-y-10">
                    <input type="text" class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-semibold placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg" placeholder="Email">

                    <input type="text" class="w-full h-10 bg-input-primary rounded-lg placeholder:text-white placeholder:font-fredoka placeholder:font-semibold placeholder:pl-2 placeholder:text-sm lg:h-14 md:placeholder:text-lg" placeholder="Password">

                    <button type="submit" class="w-[25%] mx-auto block">
                        <img src="img/btn-login.png" alt="" class="w-full">
                    </button>
                </form>
            </div>

            <div class="w-full h-[40%]  relative lg:h-[35%] xl:h-[47%] 2xl:h-[65%] 2xl:mt-3">
                <img src="img/hero.png" alt="" class="w-1/2 absolute bottom-0 left-0 xl:w-[40%] ">
                <img src="img/hero1.png" alt="" class="w-1/2 absolute bottom-0 right-0 xl:w-[40%]">
            </div>
            
        </div>
        <div class="full hidden md:w-1/2 md:block ">
            <img src="img/bg-login.png" alt="" class="object-cover w-full h-full">
        </div>
    </div>

@endsection