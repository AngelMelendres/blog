<?php

namespace App\Http\Controllers;

use App\Models\ProductoModel;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function __invoke()
    {
        return view("productos/inventario");
        
   
    }
}
