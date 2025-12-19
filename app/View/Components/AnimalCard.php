<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Animal;

class AnimalCard extends Component
{
    public Animal $animal;

    public function __construct(Animal $animal)
    {
        $this->animal = $animal;
    }

    public function render()
    {
        return view('components.animal-card');
    }
}
