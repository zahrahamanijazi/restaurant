<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Foodchef;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use App\Models\Cart;

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
        $chefdata=foodchef::all();
        $usertype=Auth::user()->usertype;
        if($usertype=='1'){
            return view('admin.adminhome',compact('data','chefdata'));
        }
        else{
            $user_id=Auth::id();

            $count=cart::where('user_id',$user_id)->count();
            return view('home',compact('data','chefdata','count'));

        }

    }

    public function addcart(Request $request, $id){
        if(Auth::id()){
            $user_id=Auth::id();
            $food_id=$id;
            $quantity=$request->quantity;
            $cart=new cart;
            $cart->user_id=$user_id;
            $cart->food_id=$food_id;
            $cart->quantity=$quantity;
            $cart->save();

            return redirect()->back();

        }
        else
        {

            return redirect('/login');
        }
    }

}
