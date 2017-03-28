<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;
use App\Http\Requests;
use App\Http\Models\Users;
Use DB;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->users = new Users();
    }

    public function Login()
    {
        $input = Request()->all();
        $Token= $input['Token'];
        $Phone = $input['Phone'];
        $DivceTypeID = $input['DivceTypeID'];
        $Password = MD5($input['Password']);
        $this->users->where($this->users->getTable().'.Phone', '=', $Phone)->update(['Token'=>$Token,'DivceTypeID'=>$DivceTypeID]);

        $output = $this->users
            ->where('Phone', '=', $Phone)
            ->where('Password', '=', $Password)
            ->get();
        if (Count($output) > 0) {
            $output = $this->users->where('Phone', '=', $Phone)->get();
        } else {
            $output = ['Error' => 'This Phone or Password Invalid'];
        }
        return Response()->json($output);


    }
    public function LoginArabic()
    {
        $input = Request()->all();
        $Token= $input['Token'];
        $Phone = $input['Phone'];
        $DivceTypeID =$input['DivceTypeID'];
        $this->users->where($this->users->getTable().'.Phone', '=', $Phone)->update(['Token'=>$Token,'DivceTypeID'=>$DivceTypeID]);

        $Phone = $input['Phone'];
        $Password = MD5($input['Password']);
        $output = $this->users
            ->where('Phone', '=', $Phone)
            ->where('Password', '=', $Password)
            ->get();
        if (Count($output) > 0) {
            $output = $this->users->where('Phone', '=', $Phone)->get();
        } else {
            $output = ['Error' => 'البريد الالكترونى او كلمة المرور غير صحيحة '];
        }
        return Response()->json($output);


    }

//    public  function Logout(){
//
//        $input=Request()->all();
//
//    }

}
