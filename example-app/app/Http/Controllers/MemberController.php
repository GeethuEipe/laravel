<?php

namespace App\Http\Controllers;
use App\models\Member;

use Illuminate\Http\Request;


class MemberController extends Controller
{
    function memberAdd(Request $req)
    {
        $member=new Member;
        $member->member_name=$req->member_name;
        $member->email=$req->email;
        $member->address=$req->address;
        $member->save();
        return redirect('add');
    }
    function lis()
    {
        $data=Member::all();
        return  view('list',['data'=>$data]);
    }

    function delete($id)
    {
        $data=Member::find($id);
        $data->delete();
        return redirect('view');
    }
    function update($id)
    {
        $data=Member::find($id);
        return view('update',['data'=>$data]);
        
    }
    function update_action(Request $req)
    {
    $data=Member::find($req->id);
    $data->member_name=$req->member_name;
    $data->email=$req->email;
    $data->address=$req->address;
    $data->save();
    return redirect('view');
    
    }

}
