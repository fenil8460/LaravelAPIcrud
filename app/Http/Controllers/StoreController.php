<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\member;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;


class StoreController extends Controller
{
    //
    function member(Request $req){

        $data1 = $req->input('users');
        $req->session()->flash('users',$data1);
        return redirect('store');
    }

    // function addData(Request $req){

    //     $member= new member;
    //     $member->user_name=$req->name;
    //     $member->pasword=$req->password;
    //     $member->save();
    //     return redirect('add');

    // }

    // function  show(){
    //     $data = member::paginate(2);
    //     return view('list',['member'=>$data]);
    // }

    // function  shows(){
    //     $data = member::paginate(2);
    //     return view('addmember',['member'=>$data]);
    // }

    // function delete($user_id){
    //     $data = DB::delete('delete from users where user_id = ?', [$user_id] );  
    //     return redirect('add');
    // }

    // function showData($user_id){
    //     $data = DB::select('select * from users where user_id = ?', [$user_id]);
    //     return view('update',['data'=>$data]);        
        
    // }

    // function updateData(Request $req){
        // $a =$req->id;
        // print_r($a);
        // exit();
        // $data = member::find($req->user_id);
        // $data->user_name=$req->name;
        // $data ->pasword=$req->password;
        // $member->save();
        // return redirect('list');
    //     $id = $req->id;
    //     $user_name = $req->names;
    //     $password = $req->password;
    //     $data = DB::update("UPDATE users SET user_name='$user_name', pasword='$password' where user_id =".$id);
        
    //     return redirect('add');
    // }
}
