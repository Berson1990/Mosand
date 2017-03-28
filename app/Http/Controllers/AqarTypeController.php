<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Auth\Access\Response;
use App\Http\Requests;
use App\Http\Models\AqarType;
Use DB;


class AqarTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $output = AqarType::select('AqarTypeID', 'AqarTypeName', 'Icone','ContainAttr')->get();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if ($id == 1) {
       
            $output = AqarType::select('AqarTypeID', 'AqarTypeName', 'Icone','ContainAttr')
                ->where('Rent', '=', $id)
                ->get();
        } elseif ($id == 2) {
      
            $output = AqarType::select('AqarTypeID', 'AqarTypeName', 'Icone','ContainAttr')
                ->where('Ownership', '=', $id)
                ->get();
        }

        return Response()->json($output);

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
