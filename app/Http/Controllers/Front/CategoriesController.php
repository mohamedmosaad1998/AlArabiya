<?php

namespace App\Http\Controllers\Front;

use App\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index(){
        if (isset($_GET['active']))
            $categories= Category::where('active',true)->latest()->paginate(24,'*','course');
        else
            $categories= Category::latest()->paginate(24,'*','course');
        return view('front.pages.category')->with([
           'categories'=>$categories
        ]);
    }

    public function show(Category $category){
        $courses=Course::where('category_id',$category->id)->paginate(20,'*','course');
        return view('front.courses')->with(['courses'=>$courses,'categoryName'=>$category->name]);
    }

}
