<?php

namespace App\Livewire;

use Livewire\Component;

class LearningModules extends Component
{
    public $text = '';

    public function render()
    {
        return view('livewire.learning-modules');
    }
}
