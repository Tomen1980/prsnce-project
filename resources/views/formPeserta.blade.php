@extends('Layouts.app')

@section('content')
    <section>
        @if (session()->has('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                {{ session()->get('error') }}
            </div>
        @endif
        @if (session()->has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                {{ session()->get('success') }}
            </div>
        @endif


        <!-- Modal Section -->
        @include('components.boxModelProfile')

        @if ($errors->any())
            <div class="w-full relative h-[170vh] md:h-[140vh] ">
            @elseif (!$errors->any())
                <div class="w-full relative h-[140vh] md:h-[120vh]">
        @endif

        <img src="/img/bg-login.png" alt="" class="object-cover w-full h-full l">
        <div class="absolute inset-0 bg-black opacity-50 l"></div>

        <div class="absolute top-0  w-full flex">
            <div class="w-1/2">
                <img src="/img/logo-dashboard.png" alt="" class="" class="object-cover w-full ">
            </div>
            <div class="w-1/2">
                <div class=" w-[15%] lg:w-[10%] xl:w-[6%] bg-slate-700 h-[150px] sm:h-[200px] md:h-[250px] lg:h-[200px] rounded-b-full fixed top-0 right-5 z-10"
                    id="profile">
                    <div>
                        <img src="/img/profile.png" alt="Profile Image"
                            class="object-cover w-[70%] mx-auto mt-5 h-full rounded-full">
                        <img src="/img/hand.png" alt="Profile Image" class="object-cover w-[70%] mx-auto h-full">
                    </div>
                </div>
            </div>
        </div>

        <div class=" border-2 bg-white absolute inset-6 mt-36 rounded-xl md:p-5 my-10 md:space-y-5 lg:space-y-10">
            <h1 class="text-3xl font-semibold text-center font-fredoka mb-5 md:text-4xl lg:text-6xl">Data Peserta Baru
            </h1>
            <div>
                <p class="font-fredoka font-semibold text-input-primary md:text-xl lg:text-2xl">Data Peserta</p>
                {{-- <div class="flex flex-col space-y-2 lg:flex-row lg:flex-wrap border-2"> --}}
                <form action="{{ $action == 'update' ? route('updatePeserta', ['id' => $data->id]) : route('addPeserta') }}"
                    method="POST">
                    @csrf
                    @if ($action == 'update')
                        @method('PUT')
                    @else
                        @method('POST')
                    @endif


                    <div class="grid grid-cols-1 gap-2 md:grid-cols-2 ">
                        <div>
                            @error('name')
                                <div class="text-red-400">{{ $message }}</div>
                            @enderror
                            <input type="text" name="name"
                                value="{{ old('name', $action == 'update' ? $data->name : '') }}"
                                class="w-full lg:h-14  border-2 text-white font-fredoka text-semibold bg-input-primary rounded-lg p-2 placeholder:text-input-placeholder placeholder:font-semibold placeholder:font-fredoka"
                                placeholder="Nama">
                        </div>

                        <div>
                            @error('nip')
                                <div class="text-red-400">{{ $message }}</div>
                            @enderror
                            <input type="text" name="nip"
                                value="{{ old('nip', $action == 'update' ? $data->id : '') }}"
                                class="w-full lg:h-14  border-2 text-white font-fredoka text-semibold bg-input-primary rounded-lg p-2 placeholder:text-input-placeholder placeholder:font-semibold placeholder:font-fredoka"
                                placeholder="NIP">
                        </div>
                        <div>
                            @error('noTelp')
                                <div class="text-red-400">{{ $message }}</div>
                            @enderror
                            <input type="tel" name="noTelp"
                                value="{{ old('noTelp', $action == 'update' ? $data->noTelp : '') }}"
                                class="w-full lg:h-14  border-2 text-white font-fredoka text-semibold bg-input-primary rounded-lg p-2 placeholder:text-input-placeholder placeholder:font-semibold placeholder:font-fredoka"
                                placeholder="Telphone">
                        </div>
                        <div>
                            @error('instansi')
                                <div class="text-red-400">{{ $message }}</div>
                            @enderror
                            <input type="text" name="instansi"
                                value="{{ old('instansi', $action == 'update' ? $data->instansi : '') }}"
                                class="w-full lg:h-14 border-2 text-white font-fredoka text-semibold bg-input-primary rounded-lg p-2 placeholder:text-input-placeholder placeholder:font-semibold placeholder:font-fredoka"
                                placeholder="Instansi">
                        </div>
                        <div>
                            @error('mentor')
                                <div class="text-red-400">{{ $message }}</div>
                            @enderror
                            <input type="text" name="mentor"
                                value="{{ old('mentor', $action == 'update' ? $data->mentor : '') }}"
                                class="w-full lg:h-14 border-2 text-white font-fredoka text-semibold bg-input-primary rounded-lg p-2 placeholder:text-input-placeholder placeholder:font-semibold placeholder:font-fredoka"
                                placeholder="Mentor">
                        </div>
                        <div>
                            @error('tipePeserta')
                                <div class="text-red-400">{{ $message }}</div>
                            @enderror
                            <select name="tipePeserta" id=""
                                class="w-full lg:h-14 border-2 text-input-placeholder font-fredoka text-semibold bg-input-primary rounded-lg p-2 placeholder:text-input-placeholder placeholder:font-semibold placeholder:font-fredoka">
    
                                <option value="" {{ $action == 'update' ? 'selected' : '' }}
                                    class="{{ $action == 'update' ? 'hidden' : '' }} ">Tipe Peserta</option>
                                @foreach ($type as $item)
                                    <option value={{ $item->id }}
                                        {{ $action == 'update' && $data->id_intern == $item->id ? 'selected' : '' }}>
                                        {{ $item->pesertaKP }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            @error('tipeUnit')
                            <div class="text-red-400">{{ $message }}</div>
                            @enderror
                            <select name="tipeUnit" id=""
                                class="w-full lg:h-14 border-2 text-input-placeholder font-fredoka text-semibold bg-input-primary rounded-lg p-2 placeholder:text-input-placeholder placeholder:font-semibold placeholder:font-fredoka">
                                <option value="" {{ $action == 'update' ? 'selected' : '' }}
                                    class="{{ $action == 'update' ? 'hidden' : '' }}"
                                    class="text-white font-fredoka text-semibold">Unit Peserta</option>
                                @foreach ($unit as $item)
                                    <option value={{ $item->id }}
                                        {{ $action == 'update' && $data->id_unit == $item->id ? 'selected' : '' }}>
                                        {{ $item->unitType }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
            </div>
            <div class="">
                <p class="font-fredoka font-semibold text-input-primary lg:text-2xl">Data Login</p>
                <div class="grid grid-cols-1 gap-2 md:grid-cols-2">
                    <div>
                        @error('email')
                            <div class="text-red-400">{{ $message }}</div>
                        @enderror
                        <input type="text" name="email"
                            value="{{ old('email', $action == 'update' ? $data->email : '') }}"
                            class="w-full lg:h-14  border-2 text-white font-fredoka text-semibold bg-input-primary rounded-lg p-2 placeholder:text-input-placeholder placeholder:font-semibold placeholder:font-fredoka"
                            placeholder="Email">
                    </div>
                    <div>
                        @error('password')
                            <div class="text-red-400">{{ $message }}</div>
                        @enderror
                        <input type="password" name="password" value="{{ old('password') }}"
                            class="w-full lg:h-14  border-2 text-white font-fredoka text-semibold bg-input-primary rounded-lg p-2 placeholder:text-input-placeholder placeholder:font-semibold placeholder:font-fredoka"
                            placeholder="Password">
                    </div>
                    <div>
                        @error('passwordVerify')
                            <div class="text-red-400">{{ $message }}</div>
                        @enderror
                        <input type="password" name="passwordVerify"
                            class="w-full lg:h-14  border-2 text-white font-fredoka text-semibold bg-input-primary rounded-lg p-2 placeholder:text-input-placeholder placeholder:font-semibold placeholder:font-fredoka"
                            placeholder="Konfirmasi Password">
                    </div>
                </div>
            </div>
            <button
                class="w-[40%] mx-auto block bg-black h-12 text-white font-fredoka font-semibold mt-5 rounded-xl shadow-lg">Unggah</button>
            </form>
        </div>
        <a href="/dashboard"
            class="absolute bottom-5 left-5  py-1 px-5 md:py-2 md:px-10 rounded-lg text-white font-semibold font-fredoka bg-[#990D26] ">
            Kembali </a>
        </div>
    </section>

    @include('Layouts.footer')
@endsection
