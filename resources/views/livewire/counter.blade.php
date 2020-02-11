<div style="text-align: center">
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
    <button wire:click="decrement">-</button>

    <input type="text" wire:model.lazy="name">

    Hi! My name is {{ $name }}
</div>
