<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;
use App\Http\Requests;
use App\Http\Models\Users;
Use DB;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->users = new Users();
    }

    public function index()
    {
        return view('Admin.login');
    }
    public function  Aqars(){
        return view('Admin.Aqars');
    }

    public function login()
    {

        $input = Request()->all();
        $Email = $input['Email'];
        $Password = MD5($input['Password']);

        $output = $this->users
            ->where('Email', '=', $Email)
            ->where('Password', '=', $Password)
            ->get();
        if (Count($output) > 0) {
            $output = ['Success'=> 'Wellcome'];
        } else {
            $output = ['Error' => 'This Phone or Password Invalid'];
        }
        return Response()->json($output);


    }


}
