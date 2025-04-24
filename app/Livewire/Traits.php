<?php

namespace App\Livewire;

use App\Models\Score;
use App\Models\Upgrade;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Traits extends Component
{
    public $upgrades;
    public $counter;
    public $costLoopEnhancer = 0;
    public $costStackOverdrive = 0;
    public $costBitSplitter = 0;
    public $costGarbageCollector = 0;

    public function loopEnhancerUpgrade()
    {
        $upgrades = Upgrade::where('user_id', Auth::id())->first();
        $counter = Score::where('user_id', Auth::id())->first();

        $cost = ceil(pow($upgrades->loop_enhancer, 1.10));
        if($counter->total >= $cost) {
            $upgrades->loop_enhancer++;
            $upgrades->save();
            $counter->total -= $cost;
            $counter->save();
        }
    }

    public function stackOverdriveUpgrade()
    {
        $upgrades = Upgrade::where('user_id', Auth::id())->first();
        $counter = Score::where('user_id', Auth::id())->first();

        $cost = ceil(pow($upgrades->stack_overdrive, 1.10));
        if($counter->total >= $cost) {
            $upgrades->stack_overdrive++;
            $upgrades->save();
            $counter->total -= $cost;
            $counter->save();
        }
    }

    public function bitSplitterUpgrade() 
    {
        $upgrades = Upgrade::where('user_id', Auth::id())->first();
        $counter = Score::where('user_id', Auth::id())->first();

        $cost = ceil(pow($upgrades->bit_splitter, 1.78));
        if($counter->total >= $cost) {
            $upgrades->bit_splitter++;
            $upgrades->save();
            $counter->total -= $cost;
            $counter->save();
        }
    }

    public function garbageCollectorUpgrade()
    {
        $upgrades = Upgrade::where('user_id', Auth::id())->first();
        $counter = Score::where('user_id', Auth::id())->first();

        $cost = ceil(pow($upgrades->garbage_collector, 2.13));
        if($counter->total >= $cost) {
            $upgrades->garbage_collector++;
            $upgrades->save();
            $counter->total -= $cost;
            $counter->save();
        }
    }

    public function render()
    {
        $this->upgrades = Upgrade::where('user_id', Auth::id())->first();
        $this->counter = Score::where('user_id', Auth::id())->first();

        $this->costLoopEnhancer = ceil(pow($this->upgrades->loop_enhancer, 1.10));
        $this->costStackOverdrive = ceil(pow($this->upgrades->stack_overdrive, 1.10));
        $this->costBitSplitter = ceil(pow($this->upgrades->bit_splitter, 1.78));
        $this->costGarbageCollector = ceil(pow($this->upgrades->garbage_collector, 2.13));

        return view('livewire.traits', [
            'upgrades' => $this->upgrades,
            'costStrength' => $this->costLoopEnhancer,
            'costEducation' => $this->costStackOverdrive,
            'costEndurance' => $this->costBitSplitter,
            'costLuck' => $this->costGarbageCollector,
        ]);
    }
}
