@forelse ($units as $item)
<div class='w-full bg-[#302E2E] h-14 rounded-md p-2 border-red-300'>
    <div class="flex relative w-full justify-between items-center">
        <h2 class='text-white font-fredoka font-medium text-xl lg:text-3xl '>
            {{ $item->unitType }}</h2>
        <div class="flex   items-center justify-center gap-1">
            <button class='w-1/2 openEditForm' data-id="{{ $item->id }}">
                <img src='img/edit.png' alt='' class='object-cover w-[30px] '>
            </button>
            <form action="/units/{{ $item->id }}" method="POST" class='w-1/2 flex'>
                @csrf
                @method('delete')
                <button class="w-full">
                    <img src='img/sampah.png' alt='' class='object-cover w-[30px]'>
                </button>
            </form>
        </div>
    </div>
</div>
@empty
Kosong
@endforelse