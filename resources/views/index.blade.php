<x-layout>
    <div class="webapp-title">
        @guest
        <h1>{<span>Array Game</span>}</h1>
        @endguest
        @auth
        <livewire:counter />
        @endauth
    </div>
</x-layout>
