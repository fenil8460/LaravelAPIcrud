<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\member;
use Illuminate\Support\Facades\DB;

//api Controller

class DummyController extends Controller
{
    //
    function getDataApi(){

        return ["name"=>"Fenil"];
    }
    function list($id=null){
       
        return $id?DB::table('clients')->where('name',$id)->get():DB::table('clients')->get();

      //  return member::find('14');
  }
  function listAll(){
       
    return DB::table('clients')->get();

    // print_r($dataa);
    // foreach($dataa as $data){
    // echo $data->email;

    //return view('clients.index',["collection"=>$data]);

  //  return member::find('14');
}
function listAllvue(){
       
    return DB::table('users')->get();
}
function listAllvueid(Request $req){
       $id = $req->id;
    return DB::table('users')->where('id',$id)->get();
}

    function addDataApi(Request $req){
        
        $name = $req->name;
        $email = $req->email;
        $phone = $req->phone;
        $image = $req->image;
        //echo $tn;
        // $cr = $req->created_at;
        // $up = $req->updated_at;
        $unix_timestamp = now()->timestamp;
        DB::table('clients')->insert([
            "name"=>$name,
            "email"=>$email,
            "phone"=>$phone,
            "image"=>$image,
            "active"=>1
        ]);
        return ["result"=>"done"];
    }

   

    function putDataApi(Request $req){
        $id = $req->id;
        $name = $req->name;
        $email = $req->email;
        $phone = $req->phone;
        $image = $req->image;
    
         DB::table('clients')->where('id',$id)->update([
            "name"=>$name,
            "email"=>$email,
            "phone"=>$phone,
            "image"=>$image
        ]);
        
        return ["result"=>"update"];
    }

    function deleteDataApi(Request $req){
        $id =   $req->id;
        $data = DB::table('clients')->where('id',$id)->update([
            "active"=>0
        ]);
        return ["result"=>"Delete"];
    }

    function addDataApivue(Request $req){
        
        $name = $req->name;
        $email = $req->email;
        $password = $req->password;
       
        $unix_timestamp = now()->timestamp;
        DB::table('users')->insert([
            "name"=>$name,
            "email"=>$email,
            "password"=>$password
        ]);
        return ["result"=>"done"];
    }

    function putDataApivue(Request $req){
        $id = $req->id;
        $name = $req->name;
        $email = $req->email;
        $password = $req->password;
       
    
         DB::table('users')->where('id',$id)->update([
            "name"=>$name,
            "email"=>$email,
            "password"=>$password
        ]);
        
        return ["result"=>"update"];
    }

    function deleteDataApivue(Request $req){
        $id =   $req->id;
        $data = DB::table('users')->where('id',$id)->delete();
        return ["result"=>"Delete"];
    }
}


