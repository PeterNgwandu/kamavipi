<?php

namespace App\Http\Controllers;

use App\Content;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Resources\CategoryCollection;

class CategoryResourceController extends Controller
{
    public function show()
    {
        return  CategoryCollection::collection(Category::all());
    }
}
