<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   /* function index()
    {
        echo "Hello from controller";
    }*/

    /*function index($name){
        echo $name;
        echo "$name Hello from controller";
    }*/
   /* function about()
    {
      return view('about',['user'=>'geethu']);
    }*/
    /*function about()
    {
        $data=['anil','peter','john'];
        return view('about',['user'=>$data]);
    }*/

    function login(Request $req)
    {
        return $req->input();
    }


}
