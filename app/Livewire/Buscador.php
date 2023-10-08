<?php

namespace App\Livewire;

use Livewire\Component;

class Buscador extends Component
{
    public $buscador = 'DesarrolloWeb.com';

    public function render()
    {
        return view('livewire.buscador');
    }
}
