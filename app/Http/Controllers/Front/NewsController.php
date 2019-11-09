<?php

namespace App\Http\Controllers\Front;

use App\models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{

    public function index(){

        $news=News::latest()->paginate(4,'*','category');

        return view('front.pages.news')->with([
            'news'=>$news
        ]);
    }

    public function show(News $news){
        return view('front.pages.new')->with([
            'new'=>$news
        ]);
    }

}
