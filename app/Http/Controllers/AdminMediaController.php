<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminMediaController extends Controller
{

    public function index()
    {
        $photos = Photo::all();
        return view('media.index', compact('photos'));
    }

    public function create()
    {
        return view('media.create');
    }

    public function store(Request $request)
    {
        $file = $request->file('file');
        $name = time() . $file->getClientOriginalName();
        $file->move('images', $name);
        Photo::create(['file' => $name]);
    }
    public function destroy($id)
    {
        $photo = Photo::findOrFail($id);
        unlink(public_path() . $photo->file);
        $photo->delete();
        Session::flash('mess','Delete one media');
        return redirect('/admin/media');
    }
}
