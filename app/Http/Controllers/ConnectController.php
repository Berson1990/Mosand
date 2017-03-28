<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class ConnectController extends Controller
{

    public function Gettconnect(){

        $output = DB::select('select * from tblconnect');
        return Response()->json($output[0]);
    }
}
