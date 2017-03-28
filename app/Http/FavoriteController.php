<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use App\Http\Models\Users;
use App\Http\Models\AddAqar;
use App\Http\Models\Favorite;
use App\Http\Models\AqarType;
use App\Http\Models\AqarProperty;
use App\Http\Models\City;
use App\Http\Models\Areas;
use App\Http\Models\Country;
use App\Http\Requests;
use DB;

class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->users = new Users();
        $this->addaqar = new AddAqar();
        $this->favorite = New Favorite();
        $this->aqartype = New AqarType();
        $this->aqarproperty = new AqarProperty();
        $this->city = New City();
        $this->area = New Areas();
        $this->country = new Country();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Request()->all();
        $output = $this->favorite->create($input);
        $FavoriteID = $output['FavoriteID'];
        $output = $this->addaqar->with('images')
            ->select('tbaddaqar.*',
                'tblcity.*',
                'tblareas.*',
                'tblcountry.*',
                'tblusers.*',
                'property1.PropertyName as PropertyName1',
                'property1.PFN as PropertyName1_category ',
                'property2.PropertyName as PropertyName2',
                'property2.PFN as PropertyName2_category ',
                'property3.PropertyName as PropertyName3',
                'property3.PFN as PropertyName3_category ',
                $this->favorite->getTable() . '.FavoriteID'

            )
            ->leftjoin($this->users->getTable(), $this->addaqar->getTable() . '.UserID', '=', $this->users->getTable() . '.UserID')
            ->leftjoin($this->favorite->getTable(), $this->addaqar->getTable() . '.AddAqarID', '=', $this->favorite->getTable() . '.AddAqarID')
            ->leftjoin($this->aqartype->getTable(), $this->addaqar->getTable() . '.AqarTypeID', '=', $this->aqartype->getTable() . '.AqarTypeID')
            ->leftjoin('tblaqarproperty as property1', 'property1.AqarPropertyID', '=', 'tbaddaqar.AqarProperty1ID')
            ->leftjoin('tblaqarproperty as property2', 'property2.AqarPropertyID', '=', 'tbaddaqar.AqarProperty2ID')
            ->leftjoin('tblaqarproperty as property3', 'property3.AqarPropertyID', '=', 'tbaddaqar.AqarProperty3ID')
            ->leftjoin($this->city->getTable(), $this->addaqar->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->country->getTable(), $this->addaqar->getTable() . '.CountryID', '=', $this->country->getTable() . '.CountryID')
            ->leftjoin($this->area->getTable(), $this->addaqar->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
            ->where($this->favorite->getTable() . '.UserID', '=', $FavoriteID)
            ->groupby($this->addaqar->getTable() . '.AddAqarID')
            ->get();
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

        $output = $this->addaqar->with('images')
            ->select(
                'tbaddaqar.*',
                'tblcity.*',
                'tblareas.*',
                'tblcountry.*',
                'tblusers.*',
                'property1.PropertyName as PropertyName1',
                'property1.PFN as PropertyName1_category ',
                'property2.PropertyName as PropertyName2',
                'property2.PFN as PropertyName2_category ',
                'property3.PropertyName as PropertyName3',
                'property3.PFN as PropertyName3_category ',
                $this->favorite->getTable() . '.FavoriteID'

            )
            ->leftjoin($this->users->getTable(), $this->addaqar->getTable() . '.UserID', '=', $this->users->getTable() . '.UserID')
            ->leftjoin($this->favorite->getTable(),$this->addaqar->getTable().'.AddAqarID','=',$this->favorite->getTable().'.AddAqarID')
            ->leftjoin($this->aqartype->getTable(), $this->addaqar->getTable() . '.AqarTypeID', '=', $this->aqartype->getTable() . '.AqarTypeID')
            ->leftjoin('tblaqarproperty as property1', 'property1.AqarPropertyID', '=', 'tbaddaqar.AqarProperty1ID')
            ->leftjoin('tblaqarproperty as property2', 'property2.AqarPropertyID', '=', 'tbaddaqar.AqarProperty2ID')
            ->leftjoin('tblaqarproperty as property3', 'property3.AqarPropertyID', '=', 'tbaddaqar.AqarProperty3ID')
            ->leftjoin($this->city->getTable(), $this->addaqar->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->country->getTable(), $this->addaqar->getTable() . '.CountryID', '=', $this->country->getTable() . '.CountryID')
            ->leftjoin($this->area->getTable(), $this->addaqar->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
            ->where($this->favorite->getTable() . '.UserID', '=',$id )
            ->groupby($this->addaqar->getTable() . '.AddAqarID')
            ->get();
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
        $input = Request()->all();
        $output = $this->favorite->find($id)->update($input);
        $output = $this->favorite
            ->select(
                $this->addaqar->with('images'),
                'tbaddaqar.*',
                'tblcity.*',
                'tblareas.*',
                'tblcountry.*',
                'tblusers.*',
                'property1.PropertyName as PropertyName1',
                'property1.PFN as PropertyName1_category ',
                'property2.PropertyName as PropertyName2',
                'property2.PFN as PropertyName2_category ',
                'property3.PropertyName as PropertyName3',
                'property3.PFN as PropertyName3_category ',
                $this->favorite->getTable() . '.FavoriteID'
            )
            ->leftjoin($this->addaqar->getTable(), $this->favorite->getTable() . '.AddAqarID', '=', $this->addaqar->getTable() . '.AddAqarID')
            ->leftjoin($this->users->getTable(), $this->favorite->getTable() . '.UserID', '=', $this->users->getTable() . '.UserID')
            ->leftjoin($this->aqartype->getTable(), $this->addaqar->getTable() . '.AqarTypeID', '=', $this->aqartype->getTable() . '.AqarTypeID')
            ->leftjoin('tblaqarproperty as property1', 'property1.AqarPropertyID', '=', 'tbaddaqar.AqarProperty1ID')
            ->leftjoin('tblaqarproperty as property2', 'property2.AqarPropertyID', '=', 'tbaddaqar.AqarProperty2ID')
            ->leftjoin('tblaqarproperty as property3', 'property3.AqarPropertyID', '=', 'tbaddaqar.AqarProperty3ID')
            ->leftjoin($this->city->getTable(), $this->addaqar->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->country->getTable(), $this->addaqar->getTable() . '.CountryID', '=', $this->country->getTable() . '.CountryID')
            ->leftjoin($this->area->getTable(), $this->addaqar->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
            ->where($this->favorite->getTable() . '.FavoriteID', '=', $id)
            ->groupby($this->addaqar->getTable() . '.AddAqarID')
            ->get();
        return Response()->json($output);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->favorite->where('FavoriteID', '=', $id)->delete();
        $output = ['Success' => 'تم الغاء المفضله'];
        return Response()->json($output);
    }

    public  function IsFavourit(){
        $input = Request()->all();
        $AddAqarID = $input['AddAqarID'];
        $UserID= $input['UserID'];
        $output =$this->addaqar
            ->select(DB::raw('IFNUll(FavoriteID,0) as FavoriteID'))
            ->join($this->favorite->getTable(),$this->addaqar->getTable().'.AddAqarID','=',$this->favorite->getTable().'.AddAqarID')
            ->where($this->favorite->getTable().'.UserID','=',$UserID)
            ->where($this->favorite->getTable().'.AddAqarID','=',$AddAqarID)
            ->get();

        if(count($output) > 0  ){
            return Response()->json($output);

        }else{
            $output=['FavoriteID'=>'0'];
        }

        return Response()->json($output);



    }
}
