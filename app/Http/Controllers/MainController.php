<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;

class MainController extends Controller
{
    public function home()
    {
        $news = new News;
        return view('home', ['news' => $news->orderBy('id', 'desc')->get()]);
    }
    public function articles()
    {
        return view('articles');
    }
    public function admin()
    {
        return view('admin');
    }
    public function adminred(Request $request)
    {
        $news = new News;
        return view('adminred', ['news' => $news->orderBy('id', 'desc')->get()]);
    }

    public function search(Request $request)
    {
        $news = new News;
        $search = $request->search;
        return view('home', ['news' => $news->where('article', 'LIKE',"%{$search}%")->orwhere('text', 'LIKE',"%{$search}%")->orderBy('id', 'desc')->get()]);
    }

    public function adminredpost(Request $request, $id)
    {
        $news = new News;
        $news->article = $request->input('article');
        $news->text = $request->input('text');
        $news->image = $request->input('image');

        $data = $request->all();

        $filename = $data['image']->getClientOriginalName();

        $data['image']->move(Storage::path('/public/image/news/') . 'origin/', $filename);

        $data['image'] = $filename;

        DB::Table('news')->where('id', '=', $id)->update(['text' => $news->text,'article' => $news->article,'image' => $filename]);
        return redirect()->route('adminred');
    }

    public function adminreddel($id)
    {
        DB::Table('news')->where('id', '=', $id)->delete();

        return redirect()->route('adminred');
    }
    public function create()
    {
        return view('create');
    }
    
}
