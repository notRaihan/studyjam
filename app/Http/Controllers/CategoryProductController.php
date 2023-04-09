<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function index(){
        $categories = CategoryProduct::all();


        return response()->json(data:$categories);
    }
}
