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
use App\Http\Models\HotelImages;
use App\Http\Models\Users;

class HotelCommentArabic extends Controller
{
    public function __construct()
    {
        $this->hotel = new Hotel();
        $this->city = New City();
        $this->area = New Areas();
        $this->countey = new Country();
        $this->hotelImage = new HotelImages();
        $this->hotelcomment = new HotelComment();
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
        $output = $this->hotelcomment->create($input);
        $CommentID = $output['CommentID'];
        $output = $this->hotelcomment
//            ->with('Images')
//            ->select(
//                $this->hotelcomment->getTable() . '.*'
//                , $this->hotel->getTable() . '.*'
//                , $this->countey->getTable() . '.CountryID'
//                , $this->countey->getTable() . '.CountryName'
//                , $this->area->getTable() . '.AreaID'
//                , $this->area->getTable() . '.AreaName'
//                , $this->city->getTable() . '.CityID'
//                , $this->city->getTable() . '.CityName'
//                , $this->users->getTable() . '.*'
//
//            )
//            ->leftjoin($this->hotelcomment->getTable(), $this->hotel->getTable() . '.HotelID', '=', $this->hotelcomment->getTable() . '.HotelID')
            ->leftjoin($this->users->getTable(), $this->hotelcomment->getTable() . '.UserID', '=', $this->users->getTable() . '.UserID')
//            ->leftjoin($this->city->getTable(), $this->hotel->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
//            ->leftjoin($this->area->getTable(), $this->hotel->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
//            ->leftjoin($this->countey->getTable(), $this->hotel->getTable() . '.CountryID', '=', $this->countey->getTable() . '.CountryID')
            ->where($this->hotelcomment->getTable() . '.CommentID', '=', $CommentID)
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
        $output = $this->hotelcomment
//            ->with('Images')
//            ->select(
//                $this->hotelcomment->getTable() . '.*'
//                , $this->hotel->getTable() . '.*'
//                , $this->countey->getTable() . '.CountryID'
//                , $this->countey->getTable() . '.CountryName'
//                , $this->area->getTable() . '.AreaID'
//                , $this->area->getTable() . '.AreaName'
//                , $this->city->getTable() . '.CityID'
//                , $this->city->getTable() . '.CityName'
//                , $this->users->getTable() . '.*'
//
//
//            )
//            ->leftjoin($this->hotelcomment->getTable(), $this->hotel->getTable() . '.HotelID', '=', $this->hotelcomment->getTable() . '.HotelID')
            ->leftjoin($this->users->getTable(), $this->hotelcomment->getTable() . '.UserID', '=', $this->users->getTable() . '.UserID')
//            ->leftjoin($this->city->getTable(), $this->hotel->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
//            ->leftjoin($this->area->getTable(), $this->hotel->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
//            ->leftjoin($this->countey->getTable(), $this->hotel->getTable() . '.CountryID', '=', $this->countey->getTable() . '.CountryID')
            ->where($this->hotelcomment->getTable() . '.HotelID', '=', $id)
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
        $output = $this->hotelcomment->where('CommentID', '=', $id)->delete();
        $output = ['Success' => 'تم الحذف بنجاح'];
        return Response()->json($output);
    }
}
