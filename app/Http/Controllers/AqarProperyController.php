<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;
use App\Http\Requests;
use App\Http\Models\AqarType;
use App\Http\Models\AqarProperty;


class AqarProperyController extends Controller
{
    public function __construct()
    {
        $this->aqartype = new AqarType();
        $this->aqarproperty = new AqarProperty();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $output = $this->aqarproperty->select('tblaqarproperty.AqarTypeID', 'PropertyName ', 'AqarPropertyID')
            ->leftjoin($this->aqartype->getTable(), $this->aqartype->getTable() . '.AqarTypeID', '=', $this->aqarproperty->getTable() . '.AqarTypeID')
            ->get();
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

        $output = $this->aqarproperty
            ->select('tblaqarproperty.AqarPropertyID', 'tblaqarproperty.AqarTypeID', 'PropertyName','PFN','AllParam')
            ->leftjoin($this->aqartype->getTable(), $this->aqartype->getTable() . '.AqarTypeID', '=', $this->aqarproperty->getTable() . '.AqarTypeID')
            ->where($this->aqarproperty->getTable() . '.AqarTypeID', '=', $id)
            ->groupby('PropertyFLag')
            ->get();


        if($id == 8 ){
        
        $output = array('الكل'=>array(
        
              "AqarPropertyID"=> 60,
             "AqarTypeID"=>"8",
              "PropertyName"=> "الكل",
              "PFN"=> "الكل",
              "AllParam"=> "1"
      
      
        ));
        return $output ;
        }
        
             if($id == 9 ){
        
        $output = array('الكل'=>array(
        
              "AqarPropertyID"=> 61,
             "AqarTypeID"=>"9",
              "PropertyName"=> "الكل",
              "PFN"=> "الكل",
              "AllParam"=> "1"
      
      
        ));
        return $output ;
        }
        

        $data = array();
        $x = $output->count();
//return $x;
        if ($output->count() == 1) {

    
                   


            for ($i = 1; $i <= $x; $i++) {

        

                $output = $this->aqarproperty
                    ->select('tblaqarproperty.AqarPropertyID', 'tblaqarproperty.AqarTypeID', 'PropertyName', 'PFN','AllParam')
                   // ->leftjoin($this->aqartype->getTable(), $this->aqartype->getTable() . '.AqarTypeID', '=', $this->aqarproperty->getTable() . '.AqarTypeID')
                    ->where($this->aqarproperty->getTable() . '.AqarTypeID', '=', $id)
                    //->where($this->aqarproperty->getTable() . '.PropertyFLag', '=', $i)
                    ->get();
                    
                   
               

                $data[$output["$i"]['PFN']] = $output;

            }
        } else if($output->count() >= 1) {

            for ($i = 1; $i <= $x; $i++) {

                $output = $this->aqarproperty
                    ->select('tblaqarproperty.AqarPropertyID', 'tblaqarproperty.AqarTypeID', 'PropertyName', 'PFN','AllParam')
                    ->leftjoin($this->aqartype->getTable(), $this->aqartype->getTable() . '.AqarTypeID', '=', $this->aqarproperty->getTable() . '.AqarTypeID')
                    ->where($this->aqarproperty->getTable() . '.AqarTypeID', '=', $id)
                    ->where($this->aqarproperty->getTable() . '.PropertyFLag', '=', $i)
                    ->get();
              

                $data[$output["$i"]['PFN']] = $output;
                // $data["$i"] =$output;

            }
            }



        return Response()->json($data);


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

    public function GetBathroom()
    {

        $output = $this->aqarproperty
            ->select('tblaqarproperty.AqarPropertyID', 'tblaqarproperty.AqarTypeID', 'PropertyName')
            ->leftjoin($this->aqartype->getTable(), $this->aqartype->getTable() . '.AqarTypeID', '=', $this->aqarproperty->getTable() . '.AqarTypeID')
            ->where($this->aqarproperty->getTable() . '.AqarPropertyID', '>=', 7)
            ->where($this->aqarproperty->getTable() . '.AqarPropertyID', '<=', 11)
            ->get();

        $output2 = $this->aqarproperty
            ->select('tblaqarproperty.AqarPropertyID', 'tblaqarproperty.AqarTypeID', 'PropertyName')
            ->leftjoin($this->aqartype->getTable(), $this->aqartype->getTable() . '.AqarTypeID', '=', $this->aqarproperty->getTable() . '.AqarTypeID')
            ->where($this->aqarproperty->getTable() . '.AqarPropertyID', '>=', 1)
            ->where($this->aqarproperty->getTable() . '.AqarPropertyID', '<=', 6)
            ->get();
        $output3 = $this->aqarproperty
            ->select('tblaqarproperty.AqarPropertyID', 'tblaqarproperty.AqarTypeID', 'PropertyName')
            ->leftjoin($this->aqartype->getTable(), $this->aqartype->getTable() . '.AqarTypeID', '=', $this->aqarproperty->getTable() . '.AqarTypeID')
            ->where($this->aqarproperty->getTable() . '.AqarPropertyID', '>=', 12)
            ->where($this->aqarproperty->getTable() . '.AqarPropertyID', '<=', 18)
            ->get();


        return Response()->json([
            "Floor" => $output2,
            "Bathroom" => $output,
            "RoomCount" => $output3
        ]);

    }

    public function GetFloor()
    {
        $output = $this->aqarproperty
            ->select('tblaqarproperty.AqarPropertyID', 'tblaqarproperty.AqarTypeID', 'PropertyName')
            ->leftjoin($this->aqartype->getTable(), $this->aqartype->getTable() . '.AqarTypeID', '=', $this->aqarproperty->getTable() . '.AqarTypeID')
            ->where($this->aqarproperty->getTable() . '.AqarPropertyID', '>=', 1)
            ->where($this->aqarproperty->getTable() . '.AqarPropertyID', '<=', 6)
            ->get();
        return Response()->json($output);

    }

}
