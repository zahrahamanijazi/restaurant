<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Foodchef;
class HomeController extends Controller
{
    public function index(){
        $data=food::all();
        $chefdata=foodchef::all();
        return view('home',compact('data','chefdata'));
    }
    //
    public function redirects(){
        $data=food::all();
        $usertype=Auth::user()->usertype;
        if($usertype=='1'){
            return view('admin.adminhome');
        }
        return view('home',compact('data'));
    }
}
