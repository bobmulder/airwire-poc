<?php

namespace App\Airwire;

use Airwire\Attributes\Wired;
use Airwire\Component;

class UpdateProduct extends Component
{

    #[Wired]
    public string $name; // Shared

    #[Wired]
    public User $user; // Not shared

    public function hydrate()
    {
        debug('helleu');

        $this->user = auth()->user();
    }

}
