<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;
use App\Http\Requests;
use App\Http\Models\Users;
Use DB;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->users = new users;
    }

    public function index()
    {
        $output = Users::all();
        return Response()->json($output);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = Request()->all();
        $check = Users::all();
        foreach ($check as $check) {
            $phone = $check->Phone;
            $email = $check->Email;

            if ($phone == $input['Phone']) {
                $output = ["Error" => "This Phone is already Exist"];
                return Response()->json($output);
            } else if ($email == $input['Email']) {
                $output = ["Error" => "This Email is already Exist"];
                return Response()->json($output);

            }
        }
        $input["Password"] = MD5($input["Password"]);
        $input["ConfirmPassword"] = MD5($input["ConfirmPassword"]);
        $output = Users::create($input);
        return Response()->json($output);


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = Request()->all();
        $check = Users::all();
        $baseurl = 'http://mosaned.zbony.com/public/';
        $input["Password"] = MD5($input["Password"]);
        $input["ConfirmPassword"] = MD5($input["ConfirmPassword"]);
//        foreach ($check as $check) {
//            $phone = $check->Phone;
//            $email = $check->Email;
//
//            if ($phone == $input['Phone'] && $email == $input['Email']) {
//                $output = ["Erorr" => "The Phone or Email already Exist"];
//            } else {
        if ($input["UserPicture"] == '') {

            $output = Users::find($id)->update($input);
            $output = $this->users->where('UserID', '=', $id)->get();
            return Response()->json($output);

        } else {
            $image = $input["UserPicture"];
            $jpg_name = "photo-" . time() . ".jpg";
            $path = public_path("/User/") . $jpg_name;
            $input["UserPicture"] = $baseurl."User/" . $jpg_name;
            $img = substr($image, strpos($image, ",") + 1);//take string after ,
            $imgdata = base64_decode($img);
            $success = file_put_contents($path, $imgdata);
            $output = Users::find($id)->update($input);
            $output = $this->users->where('UserID', '=', $id)->get();
            return Response()->json($output);
        }
//            }
//        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
    }

    public function RegisterArabic()
    {

        $input = Request()->all();
        $check = Users::all();
        foreach ($check as $check) {
            $phone = $check->Phone;
            $email = $check->Email;

            if ($phone == $input['Phone']) {
                $output = ["Error" => "هذاالهاتف موجود مسبقا"];
                return Response()->json($output);
            } else if ($email == $input['Email']) {
                $output = ["Error" => "هذا البريد الالكترونى موجود مسبقا"];
                return Response()->json($output);
            }

        }
        $input["Password"] = MD5($input["Password"]);
        $input["ConfirmPassword"] = MD5($input["ConfirmPassword"]);
        $output = Users::create($input);
        return Response()->json($output);


    }
}
