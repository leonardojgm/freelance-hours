<div>
    <h1>Meu componente livewire</h1>
    <input wire:model.live="search"/>
    <br>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
    <!-- {{-- Success is as dangerous as failure. --}} -->
</div>
