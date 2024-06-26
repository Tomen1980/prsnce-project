<!-- resources/views/items/items-list.blade.php -->

@foreach($users as $user)
    <li class="list-group-item">{{ $user->name }}</li>
@endforeach