<?php

namespace App\Http\Controllers\Front;

use App\Models\Category;
use App\Models\Course;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home(){

        $categories=Category::where('active',true)->orderBy('orderBy')->paginate(4,'*','category');

        $courses=Course::latest()->paginate(6,'*','course');

        $events=Course::where('active',true)->orderByDESC('startDate')->paginate(4,'*','events');
        $newEvents=Course::where('active',true)->orderByDESC('startDate')->paginate(12,'*','NewEvents');

        $news=News::orderByDESC('created_at')->paginate(5,'*','news');

        return view('front.pages.home')->with(['categories'=>$categories,'courses'=>$courses,'events'=>$events,'news'=>$news,'newEvents'=>$newEvents]);
    }

}
