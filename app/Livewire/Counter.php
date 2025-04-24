<?php

namespace App\Livewire;

use App\Models\Score;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class Counter extends Component
{
    public function generate() {
        $counter = Score::where('user_id', Auth::id())->first();
        $counter->total++;
        $counter->save();
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
