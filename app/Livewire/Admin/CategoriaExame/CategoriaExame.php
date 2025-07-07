<?php

namespace App\Livewire\Admin\CategoriaExame;

use App\Models\ExamCategory;
use App\Services\Models\ExamCategoryModelService;
use App\Traits\WithCustomAlert;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class CategoriaExame extends Component
{
    use WithCustomAlert;
    use WithPagination;
    use WithoutUrlPagination;


    public $name;
    public $description;
    public $icon;
    public $color;
    public $sequence_order;

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'sequence_order';
    public $orderDirection = 'asc';


    protected $updatesQueryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 10],
        'orderBy' => ['except' => 'sequence_order'],
        'orderDirection' => ['except' => 'asc'],
    ];


    public function mount()
    {
       
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', function ($attribute, $value, $fail): void {
                $slug = Str::slug($value);
                if (ExamCategory::where('slug', $slug)->exists()) {
                    $fail('Este nome já está em uso. Por favor, escolha outro.');
                }
            }],
            'description' => ['required', 'string'],
            'icon' => ['nullable', 'string'],
            'sequence_order' => ['nullable', 'integer'],
        ];
    }


    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function updatedPerPage(): void
    {
        $this->resetPage();
    }


    public function sortBy($column): void
    {
        if ($this->orderBy === $column) {
            $this->orderDirection = $this->orderDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->orderBy = $column;
            $this->orderDirection = 'asc';
        }
        $this->resetPage();
    }


    public function getCategoriasProperty(): \Illuminate\Pagination\LengthAwarePaginator
    {
        return ExamCategoryModelService::getPaginated(
            $this->search,
            $this->perPage,
            $this->orderBy,
            $this->orderDirection
        );
    }



    public function saved(): void
    {
        $this->validate();

        if (ExamCategoryModelService::create($this)) {
            $this->showSuccessAlert();
            $this->reset(['name', 'description', 'icon', 'sequence_order']);
            $this->resetValidation();
            // $this->categorias = ExamCategoryModelService::index();
        } else {
            $this->showErrorAlert();
        }
    }

    public function render()
    {
        return view('livewire.admin.categoria-exame.categoria-exame');
    }
}
