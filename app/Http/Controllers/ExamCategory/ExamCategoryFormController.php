<?php

namespace App\Http\Controllers\ExamCategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamCategoryFormController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('ExamCategory.ExamCategoryForm');
    }
}
