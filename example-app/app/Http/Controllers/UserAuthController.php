<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\models\Auth;

class UserAuthController extends Controller
{
    function valid(Request $req)
    {
        $req->validate([
        'name'=>'required|regex:/^[\pL\s\-]+/u|max:20',
        'email'=>'required|email|unique:auths',
        'password'=>'required|alpha_num|min:6']);
        
        $Auth=new Auth;
         $Auth->name=$req->name;
         $Auth->email=$req->email;
         $Auth->password=Hash::make($req->password);
         $query=$Auth->save();
         if($query)
         {
             return back()->with('sucess','successfully registered');
         }
         else{
             return back()->with('fail','something went wrong');
         }
        
        
    }
    function dashboard()
    {
        $data=['LoggedUser'=>Auth::where('id','=',Session('LoggedUser'))->first()];
        return view('auth/dashboard',$data);
    }
   
    function check(Request $req)
    {
        $req->validate(['email'=>'required',
        'password'=>'required',

        ]);
        $userinfo=Auth::where('email','=',$req->email)->first();
        if(!$userinfo)
        {
            return back()->with('fail','we cannot recognized');
        }
        else{
            if(Hash::check($req->password,$userinfo->password))
            {
                $req->Session()->put('LoggedUser',$userinfo->id);
                return redirect('dashboard');
            }
            else{
                return back()->with('fail','invalid password');
            }
        }
            
    }   
    function logout()
    {
        if(session()->has('LoggedUser'))
        {
            session()->pull('LoggedUser');
            return redirect('login');
        }
        


    }
    
    
}
