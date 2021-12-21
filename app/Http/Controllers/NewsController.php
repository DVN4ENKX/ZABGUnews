<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = new News;
        return view('home',['news' => $news-> orderBy('id','desc')->get()]);
    }

    public function newsmaker($id)
    {
        $news = new News;
        return view('newstext',['news' => $news ->find($id)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new News();
        $news -> article = $request->input('article');
        $news -> text = $request->input('text');
        $news -> image = $request->input('image');

        $data = $request->all();

        $filename = $data['image']->getClientOriginalName();

        $data['image']->move(Storage::path('/public/image/news/').'origin/',$filename);

        $data['image'] = $filename;
        News::create($data);
        
        return redirect()->route('adminred');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function newsupdate(Request $request, $id)
    {
        $news = new News;
        return view('newsupdate',['news' => $news ->find($id)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
