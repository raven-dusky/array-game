<div>
    <div class="upgrade-container">
        <div class="upgrade-btns">
            <div class="upgrade-counter">
                <span>{{ number_format($upgrades->loop_enhancer) }}</span>
                <button class="auth-btn" wire:click="loopEnhancerUpgrade">Loop Enhancer</button>
                <span>Cost: {{ number_format($costLoopEnhancer) }}</span>
            </div>
            <div class="upgrade-counter">
                <span>{{ number_format($upgrades->stack_overdrive) }}</span>
                <button class="auth-btn" wire:click="stackOverdriveUpgrade">Stack Overdrive</button>
                <span>Cost: {{ number_format($costStackOverdrive) }}</span>
            </div>
            <div class="upgrade-counter">
                <span>{{ number_format($upgrades->bit_splitter) }}</span>
                <button class="auth-btn" wire:click="bitSplitterUpgrade">Bit Splitter</button>
                <span>Cost: {{ number_format($costBitSplitter) }}</span>
            </div>
            <div class="upgrade-counter">
                <span>{{ number_format($upgrades->garbage_collector) }}</span>
                <button class="auth-btn" wire:click="garbageCollectorUpgrade">Garbage Collector</button>
                <span>Cost: {{ number_format($costGarbageCollector) }}</span>
            </div>
        </div>
    </div>
</div>
