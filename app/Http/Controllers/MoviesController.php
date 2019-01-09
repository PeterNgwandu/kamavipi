<?php

namespace App\Http\Controllers;

use App\Content;
use App\Episode;
use App\Category;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Content::latest()->get();
        $categories = Category::all();
        return view('layout/movies.home', compact('content', 'categories'));
    }

    public function upcommings()
    {
        $content = Content::all();
        return view('layout/movies.home', compact('content'));
    }

    public function series()
    {
        $series = Content::where('contents.category_id', 2)->get();
        $category = Category::where('categories.name','Series')->get();
        return view('layout/movies.home', compact('series','category'));
    }

    public function search(Request $request)
    {
        $searchResult = null;
        $item = $request->search;
        $content = Content::where('title','LIKE',$item)->get();
        if (count($content) == 0) {
            $searchResult = 'No content found';
        }
        foreach ($content as $movie) {
            $searchResult[] = $movie->title;
        }
        return $searchResult;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('layout/movies.movies-details');
    }

    public function showNewMovies()
    {
        return view('layout/movies.new-movies');
    }

    public function showMoviesList()
    {
        return view('layout/movies.movie-list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function streamMovie($id)
    {
        if (isset($id)) {
            $episodes = Episode::where('content_id', '=', $id)->get();
            // dd($episodes);
        }
        $content = Content::all();
        return view('layout/movies.streaming', compact('episodes','content'));
    }

    public function streamMovieSingle($id)
    {
        $movie = Content::findOrFail($id);
        $content = Content::latest()->get();
        $related_movies = Content::where('id','<>',$id)->get()->unique();
        return view('layout/movies.single-movie', compact('movie', 'content','related_movies'));
    }


}
