<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;
use App\Http\Models\Hotel;
use App\Http\Models\HotelComment;
use App\Http\Requests;
use App\Http\Models\City;
use App\Http\Models\Areas;
use App\Http\Models\Country;
use App\Http\Models\HotelFavourit;
use App\Http\Models\HotelImages;
use App\Http\Models\Users;


class HotelFavoritEnglish extends Controller
{

    public function __construct()
    {
        $this->hotel = new Hotel();
        $this->city = New City();
        $this->area = New Areas();
        $this->countey = new Country();
        $this->hotelImage = new HotelImages();
        $this->hotelcomment = new HotelComment();
        $this->hotelfavourit = new HotelFavourit();
        $this->users = new Users();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $UserID = $input['UserID'];
        $HotelID = $input['HotelID'];
        $output = $this->hotelfavourit->where('UserID', '=', $UserID)->where('HotelID', '=', $HotelID)->get();
        if (Count($output) <= 0) {
            $output = $this->hotelfavourit->create($input);
            $FavoriteID = $output['FavoriteID'];

            $output = $this->hotel
                ->with('Images')
                ->select(
                    $this->hotelfavourit->getTable() . '.*',
                    $this->hotel->getTable() . '.*'
                    , $this->countey->getTable() . '.CountryID'
                    , $this->countey->getTable() . '.CountryNameE as CountryName'
                    , $this->area->getTable() . '.AreaID'
                    , $this->area->getTable() . '.AreaNameE as AreaName'
                    , $this->city->getTable() . '.CityID'
                    , $this->city->getTable() . '.CityNameE as CityName'
                    ,$this->hotelfavourit->getTable().'.FavoriteID'


                )
                ->leftjoin($this->hotelfavourit->getTable(), $this->hotel->getTable() . '.HotelID', '=', $this->hotelfavourit->getTable() . '.HotelID')
                ->leftjoin($this->users->getTable(), $this->hotelfavourit->getTable() . '.UserID', '=', $this->users->getTable() . '.UserID')
                ->leftjoin($this->city->getTable(), $this->hotel->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
                ->leftjoin($this->area->getTable(), $this->hotel->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
                ->leftjoin($this->countey->getTable(), $this->hotel->getTable() . '.CountryID', '=', $this->countey->getTable() . '.CountryID')
                ->where($this->hotelfavourit->getTable() . '.FavoriteID', '=', $FavoriteID)
                ->get();
            return Response()->json($output);



        } else {
            foreach ($output as $output) {
                $HotelID = $output->HotelID;
                $UserID = $output->$UserID;
                if ($HotelID == $HotelID && $UserID == $UserID) {

                    return ['Message' => 'This hotel is already in your favorite list'];
                } else {

                    $output = $this->hotelfavourit->create($input);
                    $FavoriteID = $output['FavoriteID'];
                }
            }



        $output = $this->hotel
            ->with('Images')
            ->select(
                $this->hotelfavourit->getTable() . '.*',
                $this->hotel->getTable() . '.*'
                , $this->countey->getTable() . '.CountryID'
                , $this->countey->getTable() . '.CountryNameE as CountryName'
                , $this->area->getTable() . '.AreaID'
                , $this->area->getTable() . '.AreaNameE as AreaName'
                , $this->city->getTable() . '.CityID'
                , $this->city->getTable() . '.CityNameE as CityName'
                ,$this->hotelfavourit->getTable().'.FavoriteID'


            )
            ->leftjoin($this->hotelfavourit->getTable(), $this->hotel->getTable() . '.HotelID', '=', $this->hotelfavourit->getTable() . '.HotelID')
            ->leftjoin($this->users->getTable(), $this->hotelfavourit->getTable() . '.UserID', '=', $this->users->getTable() . '.UserID')
            ->leftjoin($this->city->getTable(), $this->hotel->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->area->getTable(), $this->hotel->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
            ->leftjoin($this->countey->getTable(), $this->hotel->getTable() . '.CountryID', '=', $this->countey->getTable() . '.CountryID')
            ->where($this->hotelfavourit->getTable() . '.FavoriteID', '=', $FavoriteID)
            ->get();
        return Response()->json($output);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $output = $this->hotel
            ->with('Images')
            ->select(
                $this->hotelfavourit->getTable() . '.*',
                $this->hotel->getTable() . '.*'
                , $this->countey->getTable() . '.CountryID'
                , $this->countey->getTable() . '.CountryNameE as CountryName'
                , $this->area->getTable() . '.AreaID'
                , $this->area->getTable() . '.AreaNameE as AreaName'
                , $this->city->getTable() . '.CityID'
                , $this->city->getTable() . '.CityNameE as CityName'
                , $this->users->getTable() . '.*'
                ,$this->hotelfavourit->getTable().'.FavoriteID'


            )
            ->leftjoin($this->hotelfavourit->getTable(), $this->hotel->getTable() . '.HotelID', '=', $this->hotelfavourit->getTable() . '.HotelID')
            ->leftjoin($this->users->getTable(), $this->hotelfavourit->getTable() . '.UserID', '=', $this->users->getTable() . '.UserID')
            ->leftjoin($this->city->getTable(), $this->hotel->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->area->getTable(), $this->hotel->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
            ->leftjoin($this->countey->getTable(), $this->hotel->getTable() . '.CountryID', '=', $this->countey->getTable() . '.CountryID')
            ->where($this->users->getTable() . '.UserID', '=', $id)
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
        $output = $this->hotelfavourit->where('FavoriteID', '=', $id)->delete();
        $output = ['Success' => 'Delete Successful'];
        return Response()->json($output);
    }
}
