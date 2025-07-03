<?php

namespace App\Http\Controllers\Admin\CategoriaExame;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriaExameController extends Controller
{
    public function index()
    {
        return view('admin.categoria-exame.categoria-exame-form');
    }
}
