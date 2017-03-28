<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;
use App\Http\Requests;
use App\Http\Models\Users;
use App\Http\Models\Contacts;
Use DB;


class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->users = new Users();
        $this->contact = new Contacts();
    }

    public function index()
    {
        $this->contact
            ->join($this->users->getTable(),$this->contact->getTable().'.UserID','=',$this->contact->getTable().'.UserID')
            ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = Request()->all();
        $output = Contacts::create($input);

        $Message=$input['Message'];
        $Phone = $input['Phone'];
        $to ='mosanedproperty@gmail.com' ;
        $subject = "New Contact From User App";
        $txt = 'There are New Message From ' .' '. $Phone . " This Message ".  ':'."\r\n" .$Message ;
        $headers = "$Phone" . "\r\n";
        mail($to, $subject, $txt, $headers);
        return Response()->json($output);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
