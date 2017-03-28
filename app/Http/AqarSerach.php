<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;
use App\Http\Requests;
use App\Http\Models\AqarType;
use App\Http\Models\AqarProperty;
use App\Http\Models\AddAqarDetails;
use App\Http\Models\Users;
use App\Http\Models\AddAqar;
use App\Http\Models\City;
use App\Http\Models\Areas;
use App\Http\Models\Country;

class AqarSerach extends Controller
{

    public function __construct()
    {
        $this->users = new Users();
        $this->aqartype = new AqarType();
        $this->aqarproperty = new AqarProperty();
        $this->addaqar = new AddAqar();
        $this->addaqardetails = new AddAqarDetails();
        $this->city = New City();
        $this->area = New Areas();
        $this->country = new Country();
    }


    public function AqarSearch()
    {

        $input = Request()->all();
        $OwnerType = $input['OwnerType'];
        $CityID = $input['CityID'];
        $AreaID = $input['AreaID'];
        $CountryID = $input['CountryID'];
        $AqarTypeID = $input['AqarTypeID'];
        $AqarProperty1ID = $input['AqarProperty1ID'];
        $AqarProperty2ID = $input['AqarProperty2ID'];
        $AqarProperty3ID = $input['AqarProperty3ID'];
        $PriceFrom = $input['PriceFrom'];
        $PriceTo = $input['PriceTo'];
        $Lang = $input['Lang'];
        $Lat = $input['Lat'];


        $output = AddAqar::with('images')
            ->select(
                $this->addaqar->getTable() . '.*',
                $this->users->getTable() . '.*',
                $this->country->getTable() . '.CountryID',
                $this->country->getTable() . '.CountryName',
                $this->city->getTable() . '.CityID',
                $this->city->getTable() . '.CityName',
                $this->area->getTable() . '.AreaID',
                $this->area->getTable() . '.AreaName',
                $this->aqartype->getTable() . '.AqarTypeID',
                $this->aqartype->getTable() . '.AqarTypeName',
                'property1.PropertyName as PropertyName1',
                'property2.PropertyName as PropertyName2',
                'property3.PropertyName as PropertyName3'
            )
            ->leftjoin($this->aqartype->getTable(), $this->addaqar->getTable() . '.AqarTypeID', '=', $this->aqartype->getTable() . '.AqarTypeID')
            ->leftjoin('tblaqarproperty as property1', 'property1.AqarPropertyID', '=', 'tbaddaqar.AqarProperty1ID')
            ->leftjoin('tblaqarproperty as property2', 'property2.AqarPropertyID', '=', 'tbaddaqar.AqarProperty2ID')
            ->leftjoin('tblaqarproperty as property3', 'property3.AqarPropertyID', '=', 'tbaddaqar.AqarProperty3ID')
            ->leftjoin($this->city->getTable(), $this->addaqar->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->area->getTable(), $this->addaqar->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
            ->leftjoin($this->country->getTable(), $this->addaqar->getTable() . '.CountryID', '=', $this->country->getTable() . '.CountryID')
            ->leftjoin($this->users->getTable(), $this->addaqar->getTable() . '.UserID', '=', $this->users->getTable() . '.UserID');

        if ($OwnerType > 0) {
            $output = $output->where($this->addaqar->getTable() . '.OwnerType', '=', $OwnerType);
        }
        if ($AqarTypeID > 0) {
            $output = $output->Where($this->addaqar->getTable() . '.AqarTypeID', '=', $AqarTypeID);
        }
        if ($CountryID > 0) {
            $output = $output->Where($this->addaqar->getTable() . '.CountryID', '=', $CountryID);
        }

        if ($CityID > 0) {
            $output = $output->Where($this->addaqar->getTable() . '.CityID', '=', $CityID);
        }
        if ($AreaID > 0) {
            $output = $output->Where($this->addaqar->getTable() . '.AreaID', '=', $AreaID);
        }
        if ($AqarProperty1ID > 0) {
            $output = $output->Where($this->addaqar->getTable() . '.AqarProperty1ID', '=', $AqarProperty1ID);
        }
        if ($AqarProperty2ID > 0) {
            $output = $output->Where($this->addaqar->getTable() . '.AqarProperty2ID', '=', $AqarProperty2ID);
        }
        if ($AqarProperty3ID > 0) {
            $output = $output->Where($this->addaqar->getTable() . '.AqarProperty3ID', '=', $AqarProperty3ID);
        }
        if ($PriceFrom > 0) {
            $output = $output->Where($this->addaqar->getTable() . '.Price', '>=', $PriceFrom);
        }
        if ($PriceTo > 0) {
            $output = $output->Where($this->addaqar->getTable() . '.Price', '<=', $PriceTo);

        }
        if($Lang > 0 && $Lat > 0 ){
            $output = $output
                ->Where($this->addaqar->getTable() . '.Lang', '>=', $Lang)
                ->Where($this->addaqar->getTable() . '.Lat', '<=', $Lat);

        }

        $output = $output->groupby($this->addaqar->getTable() . '.AddAqarID')
            ->get();

        return Response()->json($output);

    }

    public function AqarEnglishSearch()
    {

        $input = Request()->all();
        $OwnerType = $input['OwnerType'];
        $CityID = $input['CityID'];
        $AreaID = $input['AreaID'];
        $CountryID = $input['CountryID'];
        $AqarTypeID = $input['AqarTypeID'];
        $AqarProperty1ID = $input['AqarProperty1ID'];
        $AqarProperty2ID = $input['AqarProperty2ID'];
        $AqarProperty3ID = $input['AqarProperty3ID'];
        $PriceFrom = $input['PriceFrom'];
        $PriceTo = $input['PriceTo'];
        $Lang = $input['Lang'];
        $Lat = $input['Lat'];


        $output = AddAqar::with('images')
            ->select(
                $this->addaqar->getTable() . '.*',
                $this->users->getTable() . '.*',
                $this->country->getTable() . '.CountryID',
                $this->country->getTable() . '.CountryName',
                $this->city->getTable() . '.CityID',
                $this->city->getTable() . '.CityNameE as CityName',
                $this->area->getTable() . '.AreaID',
                $this->area->getTable() . '.AreaNameE as AreaName',
                $this->aqartype->getTable() . '.AqarTypeID',
                $this->aqartype->getTable() . '.AqarTypeNameE AqarTypeName',
                'property1.PropertyNameE as PropertyName1',
                'property2.PropertyNameE as PropertyName2',
                'property3.PropertyNameE as PropertyName3'
            )
            ->leftjoin($this->aqartype->getTable(), $this->addaqar->getTable() . '.AqarTypeID', '=', $this->aqartype->getTable() . '.AqarTypeID')
            ->leftjoin('tblaqarproperty as property1', 'property1.AqarPropertyID', '=', 'tbaddaqar.AqarProperty1ID')
            ->leftjoin('tblaqarproperty as property2', 'property2.AqarPropertyID', '=', 'tbaddaqar.AqarProperty2ID')
            ->leftjoin('tblaqarproperty as property3', 'property3.AqarPropertyID', '=', 'tbaddaqar.AqarProperty3ID')
            ->leftjoin($this->city->getTable(), $this->addaqar->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->area->getTable(), $this->addaqar->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
            ->leftjoin($this->country->getTable(), $this->addaqar->getTable() . '.CountryID', '=', $this->country->getTable() . '.CountryID')
            ->leftjoin($this->users->getTable(), $this->addaqar->getTable() . '.UserID', '=', $this->users->getTable() . '.UserID');

        if ($OwnerType > 0) {
            $output = $output->where($this->addaqar->getTable() . '.OwnerType', '=', $OwnerType);
        }
        if ($AqarTypeID > 0) {
            $output = $output->Where($this->addaqar->getTable() . '.AqarTypeID', '=', $AqarTypeID);
        }
        if ($CountryID > 0) {
            $output = $output->Where($this->addaqar->getTable() . '.CountryID', '=', $CountryID);
        }

        if ($CityID > 0) {
            $output = $output->Where($this->addaqar->getTable() . '.CityID', '=', $CityID);
        }
        if ($AreaID > 0) {
            $output = $output->Where($this->addaqar->getTable() . '.AreaID', '=', $AreaID);
        }
        if ($AqarProperty1ID > 0) {
            $output = $output->Where($this->addaqar->getTable() . '.AqarProperty1ID', '=', $AqarProperty1ID);
        }
        if ($AqarProperty2ID > 0) {
            $output = $output->Where($this->addaqar->getTable() . '.AqarProperty2ID', '=', $AqarProperty2ID);
        }
        if ($AqarProperty3ID > 0) {
            $output = $output->Where($this->addaqar->getTable() . '.AqarProperty3ID', '=', $AqarProperty3ID);
        }
        if ($PriceFrom > 0) {
            $output = $output->Where($this->addaqar->getTable() . '.Price', '>=', $PriceFrom);
        }
        if ($PriceTo > 0) {
            $output = $output->Where($this->addaqar->getTable() . '.Price', '<=', $PriceTo);

        }
        if($Lang > 0 && $Lat > 0 ){
            $output = $output
                ->Where($this->addaqar->getTable() . '.Lang', '>=', $Lang)
                ->Where($this->addaqar->getTable() . '.Lat', '<=', $Lat);

        }

        $output = $output->groupby($this->addaqar->getTable() . '.AddAqarID')
            ->get();


        return Response()->json($output);

    }

}
