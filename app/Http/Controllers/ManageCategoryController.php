<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class ManageCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.contents.cat-tag', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|min:4'
        ]);

        $category = Category::create([
            'name' => $request->name,
        ]);

        session()->flash('message', 'Category '.$category->name.' has been added');

        return redirect()->route('cat-tag');

    }

    public function destroy($id)
    {
        $category = Category::findOrFaiL($id);
        $category->delete();
        return redirect()->route('cat-tag');
    }

}
