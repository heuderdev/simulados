<?php

namespace App\Http\Controllers\LearningModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LearningModuleFormController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('LearningModule.LearningModuleForm');
    }
}
