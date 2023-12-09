<div>
    <h1>{{ $title }}</h1>

    <ul>
        @foreach($users as $user)
            <li>{{ $user->id }} - {{ $user->name }}</li>
        @endforeach
    </ul>

    <button wire:click="someAction">trigger rehydration</button>
</div>
