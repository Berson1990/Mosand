<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\City;
use App\Http\Models\Areas;
use App\Http\Requests;
use App\Http\Models\Hotel;
use App\Http\Models\Country;
use DB;

class HotelSerachController extends Controller
{
    public function __construct()
    {
        $this->hotel = new Hotel();
        $this->city = New City();
        $this->area = New Areas();
        $this->country = New Country();

    }

    public function HotelSearch()
    {
        $input = Request()->all();
        $CountryID = $input['CountryID'];
        $CityID = $input['CityID'];
        $AreaID = $input['AreaID'];
        $PriceFrom = $input['PriceFrom'];
        $PriceTo = $input['PriceTo'];
        $Lang = $input['Lang'];
        $Lat = $input['Lat'];

        $output = $this->hotel->with('Images')
            ->select(
                $this->hotel->getTable() . '.*',
                $this->area->getTable() . '.AreaID',
                $this->area->getTable() . '.AreaName',
                $this->country->getTable() . '.CountryID',
                $this->country->getTable() . '.CountryName',
                $this->country->getTable() . '.Alomala',
                $this->city->getTable() . '.CityID',
                $this->city->getTable() . '.CityName'
            )
            ->leftjoin($this->country->getTable(), $this->hotel->getTable() . '.CountryID', '=', $this->country->getTable() . '.CountryID')
            ->leftjoin($this->city->getTable(), $this->hotel->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->area->getTable(), $this->hotel->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID');
        if ($CountryID > 0) {
            $output = $output->where($this->hotel->getTable() . '.CountryID', '=', $CountryID);
        }

        if ($CityID > 0) {
            $output = $output->where($this->hotel->getTable() . '.CityID', '=', $CityID);
        }
        if ($AreaID > 0) {

            $output = $output->where($this->hotel->getTable() . '.AreaID', '=', $AreaID);
        }
        if ($PriceFrom > 0) {
            $output = $output->where($this->hotel->getTable() . '.SingleRoomPrice', '>=', $PriceFrom);
        }
        if ($PriceTo > 0) {
            $output = $output->where($this->hotel->getTable() . '.SingleRoomPrice', '<=', $PriceTo);
        }
        if ($Lang > 0 && $Lat > 0) {
         $this->SearchHotelArabic($Lang,$Lat);
        }

        $output = $output
            ->orderby($this->hotel->getTable().'.HotelID','DESC')
            ->get();

        return Response()->json($output);


    }

    //location arabic
    public function SearchHotelArabic($Lang,$Lat){
        $output = $this->hotel->with('Images')
            ->select(
                $this->hotel->getTable() . '.*',
                $this->area->getTable() . '.AreaID',
                $this->area->getTable() . '.AreaName',
                $this->country->getTable() . '.CountryID',
                $this->country->getTable() . '.CountryName',
                $this->country->getTable() . '.Alomala',
                $this->city->getTable() . '.CityID',
                $this->city->getTable() . '.CityName',
                DB::raw('(3959 * acos(cos(radians(' . $Lat . ')) * cos(radians(Lat)) * cos( radians(Lang) - radians(' . $Lang . ')) + sin(radians(' . $Lat . ')) * 
sin(radians(Lat)))) AS Hoteldistance ')
            )
            ->leftjoin($this->country->getTable(), $this->hotel->getTable() . '.CountryID', '=', $this->country->getTable() . '.CountryID')
            ->leftjoin($this->city->getTable(), $this->hotel->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->area->getTable(), $this->hotel->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
            ->havingRaw('Hoteldistance  > 50')
            ->orderby('Hoteldistance')->get();
        return $output;
    }


//location english
    public  function SearchHoteLocationEnglish($Lang,$Lat){
        $output = $this->hotel->with('Images')
            ->select(
                $this->hotel->getTable() . '.*',
                $this->area->getTable() . '.AreaID',
                $this->area->getTable() . '.AreaNameE as AreaName',
                $this->country->getTable() . '.CountryID',
                $this->country->getTable() . '.Alomala',
                $this->country->getTable() . '.CountryNameE as CountryName',
                $this->country->getTable() . '.Alomala',
                $this->city->getTable() . '.CityID',
                $this->city->getTable() . '.CityNameE as CityName',
                DB::raw('(3959 * acos(cos(radians(' . $Lat . ')) * cos(radians(Lat)) * cos( radians(Lang) - radians(' . $Lang . ')) + sin(radians(' . $Lat . ')) * 
sin(radians(Lat)))) 
AS Hoteldistance ')
            )
            ->leftjoin($this->country->getTable(), $this->hotel->getTable() . '.CountryID', '=', $this->country->getTable() . '.CountryID')
            ->leftjoin($this->city->getTable(), $this->hotel->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->area->getTable(), $this->hotel->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
            ->havingRaw('Hoteldistance  > 50')
            ->orderby('Hoteldistance')->get();
        return $output;
    }



    public function HotelEnglisSearch()
    {
        $input = Request()->all();
        $CountryID = $input['CountryID'];
        $CityID = $input['CityID'];
        $AreaID = $input['AreaID'];
        $PriceFrom = $input['PriceFrom'];
        $PriceTo = $input['PriceTo'];
        $Lang = $input['Lang'];
        $Lat = $input['Lat'];

        $output = $this->hotel->with('Images')
            ->select(
                $this->hotel->getTable() . '.*',
                $this->area->getTable() . '.AreaID',
                $this->area->getTable() . '.AreaNameE as AreaName',
                $this->country->getTable() . '.CountryID',
                $this->country->getTable() . '.Alomala',
                $this->country->getTable() . '.CountryNameE as CountryName',
                $this->country->getTable() . '.Alomala',
                $this->city->getTable() . '.CityID',
                $this->city->getTable() . '.CityNameE as CityName'
            )
            ->leftjoin($this->country->getTable(), $this->hotel->getTable() . '.CountryID', '=', $this->country->getTable() . '.CountryID')
            ->leftjoin($this->city->getTable(), $this->hotel->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->area->getTable(), $this->hotel->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID');
        if ($CountryID > 0) {
            $output = $output->where($this->hotel->getTable() . '.CountryID', '=', $CountryID);
        }

        if ($CityID > 0) {
            $output = $output->where($this->hotel->getTable() . '.CityID', '=', $CityID);
        }
        if ($AreaID > 0) {

            $output = $output->where($this->hotel->getTable() . '.AreaID', '=', $AreaID);
        }
        if ($PriceFrom > 0) {
            $output = $output->where($this->hotel->getTable() . '.SingleRoomPrice', '>=', $PriceFrom);
        }
        if ($PriceTo > 0) {
            $output = $output->where($this->hotel->getTable() . '.SingleRoomPrice', '<=', $PriceTo);
        }
        if ($Lang > 0 && $Lat > 0) {
            $this->SearchHoteLocationEnglish($Lang,$Lat);
        }

        $output = $output
            ->orderby($this->hotel->getTable().'.HotelID','DESC')
            ->get();

        return Response()->json($output);


    }

}

