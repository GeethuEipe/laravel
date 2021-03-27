<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function productAdd(Request $req)
    {
        $product=new Product;
        $product->product_name=$req->product_name;
        $product->price=$req->price;
        $product->quantity=$req->quantity;
        $product->save();
        return redirect('productform');
    }
    
    function prolist()
    {
        $data=Product::all();
        return  view('productlist',['data'=>$data]);
    }
    function delete($id)
    {
        $data=Product::find($id);
        $data->delete();
        return redirect('dataview');
    }
    function proupdates($id)
    {
        $data=Product::find($id);
        return view('proupdate',['data'=>$data]);
        
    }
    function productupdate(Request $req)
    {
    $data=Product::find($req->id);
    $data->product_name=$req->product_name;
    $data->price=$req->price;
    $data->quantity=$req->quantity;
    $data->save();
    return redirect('dataview');
    
    }


function loginform(Request $req)
{
    $data=$req->input();
    $req->session()->put('user',$data['user']);
    return redirect('profile');

}


}
