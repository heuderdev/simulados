<?php

use App\Http\Controllers\Admin\AdministrativoGeralFormController;
use App\Http\Controllers\Admin\CategoriaExame\CategoriaExameController;
use App\Http\Controllers\ExamCategory\ExamCategoryFormController;
use App\Http\Controllers\LearningModule\LearningModuleFormController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::get("/learning-module-form", LearningModuleFormController::class)->name('learning.module.form');
Route::get("/exam-category-form", ExamCategoryFormController::class)->name('exam.category.form');

Route::get("/administrativo/dashboard", AdministrativoGeralFormController::class)->name('admin.dashboard');



Route::get("/administrativo/categorias-exames", [CategoriaExameController::class,'index'])->name('administrativo.categorias-exames.index');




require __DIR__.'/auth.php';
