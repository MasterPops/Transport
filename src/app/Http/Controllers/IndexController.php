<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class IndexController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id','desc')->get();
        return view('index')->with('news', $news);
    }
}
