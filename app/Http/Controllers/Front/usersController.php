<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\ChangePassword;
use App\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class usersController extends Controller
{
    public function show(User $user){
        if (auth()->check()){
            return view('front.pages.profile')->with(['user'=>$user]);
        }
        return redirect()->route('login');
    }

    public function edit(User $user){
        if (auth()->check()){
            return view('front.pages.editUser')->with(['user'=>auth()->user()]);
        }
        return redirect()->route('login');
    }

    public function update(Request $request, User $user){
        if ($user->id!=auth()->user()->id){return redirect()->route('home');}
        $request->validate([
            'title'=>['required','string'],
            'name'=>['required','string'],
            'des'=>['required','string'],
            'email'=>['required','email'],
        ]);
        if ($user->email!=$request->email){
            $request->validate(['email' => ['required', 'email', 'max:191','unique:users']]);
            $user->email=$request->email;
        }
        if ($user->title!=$request->title)$user->title=$request->title;
        if ($user->name!=$request->name)$user->name=$request->name;
        if ($user->des!=$request->des)$user->des=$request->des;

        if ($request->hasFile('image')){
            $request->validate(['image' => ['required','mimes:jpeg,jpg,png']]);
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('uploads'), $imageName);
            File::delete(public_path('uploads/'.$user->image));
            $user->image=$imageName;

        }
        if ($user->save())session()->flash('message',trans('lang.edit-done'));

        return redirect()->route('user.edit',$user);
    }

    public function changeView(){
        return view('front.pages.changePassword')->with(['user'=>auth()->user()]);
    }

    public function changePassword(User $user,ChangePassword $request){
        $request->validated();
        $user->password = Hash::make($request->new_password);
        $user->setRememberToken(Str::random(60));
        $user->save();
        session()->flash('message',trans('lang.change-password-done'));
        return redirect()->route('user.change',$user);
    }

}
