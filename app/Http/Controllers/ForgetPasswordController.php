<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use App\Http\Models\Users;
use App\Http\Requests;

class ForgetPasswordController extends Controller
{
    public function __construct()
    {
        $this->user = new Users();

    }

    private function CreateChanles()
    {

        $length = 10;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;

    }

    public function ForgetPassword()
    {

        $input = Request()->all();
        $Email = $input['Email'];
        $output= $this->user->where('Email', '=', $Email)->get();
        //return Response()->json($output);
         foreach($output as $output){
        $UserName = $output->UserName;
        }

        if (Count($output) > 0) {

            $randomString = $this->CreateChanles();
            $to = $Email;
            $subject = "New Password";
            $txt = "Dear" .' '. $UserName . "There is a New Password" . ' :' . $randomString;
            $headers = "From: info@mosaned.com" . "\r\n";
            mail($to, $subject, $txt, $headers);
         
            $Newpassword = MD5($randomString);
          $this->user->where('Email', '=', $Email)->update(['Password' => $Newpassword,'ConfirmPassword' =>$Newpassword ]);
            $outputMsg = ['Message' => 'new password sent to your email'];
            return Response()->json($outputMsg);


        } else {
            $output = ['Erorr' => 'This Email is NotExist'];
        }

        return Response()->json($output);


    }


}
