<div>
    <div class="webapp-container">
        <h1>{<span wire:poll.100ms>{{ Auth::user()->score->total }}</span>}</h1>
        <button class="auth-btn" wire:click="generate">Generate</button>
    </div>
</div>
