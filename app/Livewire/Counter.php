<?php

namespace App\Livewire;

use App\Models\Score;
use App\Models\Upgrade;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class Counter extends Component
{
    public function generate() {
        $upgrade = Upgrade::where('user_id', Auth::id())->first();
        $multiplier = 1 
        + ($upgrade->loop_enhancer ?? 0) * 0.1
        + ($upgrade->stack_overdrive ?? 0) * 0.1
        + ($upgrade->bit_splitter ?? 0) * 0.3
        + ($upgrade->garbage_collector ?? 0) * 0.4;
        $counter = Score::where('user_id', Auth::id())->first();
        $counter->total += $multiplier;
        $counter->save();
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
