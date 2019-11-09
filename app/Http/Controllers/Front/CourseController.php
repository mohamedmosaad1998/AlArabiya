<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // .'?active=true'
    public function index(){

        if (isset($_GET['active']))
            $courses= Course::where('active',true)->latest()->paginate(20,'*','course');
        else
            $courses= Course::latest()->paginate(20,'*','course');

        return view('front.courses')->with(['courses'=>$courses]);
    }

    public function show(Course $course){
        return view('front.pages.course')->with(['course'=>$course]);
    }
    public function search(){
        $search=isset($_GET['search'])?$_GET['search']:null;

        if ($search!=null && $search!=''){
            $courses=Course::where('title','LIKE','%'.$search.'%')->orWhere('description','LIKE','%'.$search.'%')->paginate(20,'*','course');
            return view('front.courses')->with(['courses'=>$courses]);
        }
        return redirect()->route('home');
    }
}
