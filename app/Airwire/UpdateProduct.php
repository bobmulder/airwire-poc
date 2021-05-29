<?php

namespace App\Airwire;

use Airwire\Attributes\Wired;
use Airwire\Component;
use Illuminate\Support\Facades\Log;

class UpdateProduct extends Component
{

    #[Wired]
    public string $name; // Shared

    #[Wired]
    public ?User $user = null; // Not shared

//    public function mount()
//    {
//        // debug('mount');
//
//    }

    public function hydrate()
    {
        // debug('helleu');

        $this->user = auth()->user();
    }

    #[Wired]
    public function submit()
    {
        Log::info($this->name);
        Log::info($this->user);

        return true;
    }

}
