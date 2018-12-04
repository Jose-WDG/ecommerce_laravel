<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{
    public function index()
    {
        
        return view('cms.admin.janelas.crudCategoria');
    }
}
