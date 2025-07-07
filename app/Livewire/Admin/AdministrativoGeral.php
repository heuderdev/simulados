<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Services\MenuService;

class AdministrativoGeral extends Component
{
    public $menus = [];

    public function mount(): void
    {
        $this->menus = MenuService::itens();
    }

    public function render()
    {
        return view('livewire.admin.administrativo-geral');
    }
}
