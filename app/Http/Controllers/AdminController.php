<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function create()
    {
        return view('admin.contents.create');
    }

    public function addEpisodes()
    {
        return view('admin.contents.episodes');
    }
}
