<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\member;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class CrudeController extends Controller
{
    //

    function addData(Request $req){

        $member= new member;
        $member->user_name=$req->name;
        $member->pasword=$req->password;
        $member->save();

        // $name=$req->name;
        // $pass=$req->name;
        // DB::table('users')->insert([
        //     'user_name'=>$name,
        //     'pasword'=>$pass
        // ]);
        return redirect('add');

    }
    function  shows(){
        $data = member::paginate(2);
        return view('addmember',['member'=>$data]);
    }

    function delete($user_id){
        //$data = DB::delete('delete from users where user_id = ?', [$user_id] );  
        
        $data = DB::table('users')->where('user_id',$user_id)->delete();
        return redirect('add');
    }

    function showData($user_id){
        // $data = DB::select('select * from users where user_id = ?', [$user_id]);
        $data = DB::table('users')->where('user_id',$user_id)->get();
       
        return view('update',['data'=>$data]);        
        
    }

    function updateData(Request $req){
        // $a =$req->id;
        // print_r($a);
        // exit();
        // $data = member::find($req->id);
        // $data->user_name=$req->name;
        // $data ->pasword=$req->password;
        // $member->save();
        // return redirect('list');
        $id = $req->id;
        $user_name = $req->names;
        $password = $req->password;
        // $data = DB::update("UPDATE users SET user_name='$user_name', pasword='$password' where user_id =".$id);
         $data = DB::table('users')->where('user_id',$id)
         ->update([
            'user_name'=>$user_name,
            'pasword'=>$password
         ]);
        
        return redirect('add');
    }

    function operations(){
        return DB::table('users')->get();
    }
}
