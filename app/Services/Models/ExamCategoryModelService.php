<?php

namespace App\Services\Models;

use App\Models\ExamCategory;
use Illuminate\Pagination\LengthAwarePaginator;
use Throwable;

class ExamCategoryModelService
{
    public static function create($input): bool
    {

        try {
            ExamCategory::create([
                'name' => $input->name,
                'slug' => \Str::slug($input->name),
                'description' => $input->description,
                'icon' => $input->icon,
                'sequence_order' => $input->sequence_order,
            ]);

            return true;
        } catch (Throwable $e) {

            return false;
        }


    }

    public static function index()
    {
        return ExamCategory::query()->orderByDesc('id')->get()->all();
    }

    public static function getPaginated(
        string $search = '',
        int $perPage = 10,
        string $orderBy = 'sequence_order',
        string $orderDirection = 'asc'
    ): LengthAwarePaginator {
        $query = ExamCategory::query();

        // Aplicar busca se fornecida
        if ($search !== '' && $search !== '0') {
            $query->where(function ($q) use ($search): void {
                $q->where('name', 'like', '%' . $search . '%');
                  // ->orWhere('description', 'like', '%' . $search . '%')
                  // ->orWhere('slug', 'like', '%' . $search . '%');
            });
        }

        // Aplicar ordenação
        $query->orderBy($orderBy, $orderDirection);

        // Se orderBy não for sequence_order, adicionar como ordenação secundária
        if ($orderBy !== 'sequence_order') {
            $query->orderBy('sequence_order', 'asc');
        }

        return $query->paginate($perPage);
    }
}
