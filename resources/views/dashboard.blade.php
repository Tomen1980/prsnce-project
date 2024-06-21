@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
        {{ session('success') }}
    </div>
@endif


@if (Auth::user()->role == '4dm1n')
    <div>
        hello Admin {{Auth::user()->name}}
    </div>
@elseif (Auth::user()->role == 'intern')
    <div>
        hello User {{Auth::user()->name}}
    </div>
@endif