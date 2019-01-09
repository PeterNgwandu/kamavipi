<?php

namespace App\Http\Controllers;

use Image;
use App\Content;
use App\Episode;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function create()
    {
        $content = Content::latest()->get();
        $categories = Category::all();
        return view('admin.contents.create', compact('content','categories'));
    }

    public function addEpisodes($id)
    {
        $content = Content::findOrFail($id);
        return view('admin.contents.episodes', compact('content'));
    }

    public function deleteSeries($id)
    {
        $series = Content::findOrFail($id);
        if (isset($series))
        {
            $series->delete();
            return view('admin.contents.delete-series', compact('series'));
        }
    }

    public function editSeries($id)
    {
       $categories = Category::where('categories.name','Series')->get();
       $series = Content::findOrFail($id);
       return view('admin.contents.edit-series', compact('series','categories'));
    }

    public function updateSeries(Request $request, $id)
    {
        $series = Content::findOrFail($id);
        $categories = Category::where('categories.name','Series')->get();
        if (isset($series))
        {
            $series->update([
                'title' => $request->input('title'),
                'url' => $request->input('url'),
                'duration' => $request->input('duration'),
                'year_released' => $request->input('year_released'),
                'category_id' => $request->input('category_id'),
                'description' => $request->input('description'),
            ]);

            return view('admin.contents.edit-series', compact('series','categories'));
        }
    }

    public function manageMovies()
    {
        $movie = Content::all();
        return view('admin.contents.manage-movies', compact('movie'));
    }

    public function deleteMovie($id)
    {
        $movie = Content::findOrFail($id);
        if (isset($movie))
        {
            $movie->delete();
            return view('admin.contents.delete-movie', compact('movie'));
        }
    }

    public function editMovie($id)
    {
        $movie = Content::findOrFail($id);
        $categories = Category::all();
        return view('admin.contents.edit-movie', compact('movie','categories'));
    }

    public function updateMovie(Request $request, $id)
    {
        $movie = Content::findOrFail($id);
        if (isset($movie))
        {
          $movie->update([
              'title' => $request->input('title'),
              'url' => $request->input('url'),
              'duration' => $request->input('duration'),
              'year_released' => $request->input('year_released'),
              'category_id' => $request->input('category_id'),
              'description' => $request->input('description'),
          ]);
        }

        return redirect()->back();
    }

    public function createContent(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required',
            'duration' => 'required',
            'year_released' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'thumbnail' => 'required',
        ]);

        // Store in the database
        $content = new Content;
        $content->title = $request->title;
        $content->url = $request->url;
        $content->duration = $request->duration;
        $content->year_released = $request->year_released;
        $content->category_id = $request->category_id;
        $content->description = $request->description;

        // Save the thumbnail
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $location = public_path('uploads/images/' . $filename);
            Image::make($thumbnail)->resize(360,640)->save($location);

            $content->thumbnail = $filename;
        }

        $content->save();

        session()->flash('message', ''.$content->title.' has been created');

        return redirect()->route('content.create');
    }

    public function createEpisode(Request $request)
    {
        // $series_id = Content::findOrFail($id);
        // if (isset($series_id))
        // {
            // Validate the request
            $this->validate(request(), [
                'content_id' => 'required',
                'title' => 'required',
                'episode_number' => 'required',
                'url' => 'required',
                'duration' => 'required',
                'year_released' => 'required',
                'thumbnail' => 'required',
                'description' => 'required',
            ]);

            // Store in the Database
            $episode = new Episode;

            $episode->content_id = $request->content_id;
            $episode->title = $request->title;
            $episode->episode_number = $request->episode_number;
            $episode->url = $request->url;
            $episode->duration = $request->duration;
            $episode->year_released = $request->year_released;
            $episode->description = $request->description;

            // Save the thumbnail
            if ($request->hasFile('thumbnail')) {
                $thumbnail = $request->file('thumbnail');
                $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
                $location = public_path('uploads/images/' . $filename);
                Image::make($thumbnail)->resize(360,640)->save($location);

                $episode->thumbnail = $filename;
            }

            // dd($episode);
            $episode->save();

            session()->flash('message', ''.$episode->title.' has been created');

            return redirect()->route('content.create');
        }
    // }

}
