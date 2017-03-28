<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;
use App\Http\Models\Hotel;
use App\Http\Requests;
use App\Http\Models\City;
use App\Http\Models\Areas;
use App\Http\Models\Country;
use App\Http\Models\HotelImages;


class HotelEngishController extends Controller
{

    public function __construct()
    {
        $this->hotel = new Hotel();
        $this->city = New City();
        $this->area = New Areas();
        $this->countey = new Country();
        $this->hotelImage = new HotelImages();

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $output = $this->hotel
            ->with('Images')
            ->select(
                  $this->hotel->getTable().'.*'
                , $this->countey->getTable() . '.CountryID'
                , $this->countey->getTable() . '.CountryNameE as CountryName'
                , $this->area->getTable() . '.AreaID'
                , $this->area->getTable() . '.AreaNameE as AreaName'
                , $this->city->getTable() . '.CityID'
                , $this->city->getTable() . '.CityNameE as CityName')
            ->leftjoin($this->city->getTable(), $this->hotel->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->area->getTable(), $this->hotel->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
            ->leftjoin($this->countey->getTable(), $this->hotel->getTable() . '.CountryID', '=', $this->countey->getTable() . '.CountryID')
            ->orderby($this->hotel->getTable().'.HotelID','DESC')
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $baseurl = 'http://mosaned.zbony.com/public/';
        $input = Request()->all();
        $output = $this->hotel->create($input);
        $HotelID = $output['HotelID'];
        for ($i = 0; $i < Count($input['Images']); $i++) {
            $input['Images'][$i]['HotelID'] = $HotelID;

            $output = $this->hotelImage->create($input['Images'][$i]);
            $ImageID = $output['ImageID'];

            $image = $input['Images'][$i]["Iamage"];
            $jpg_name = "photo-" . $ImageID . ".jpg";
            $path = public_path("/Hotel/") . $jpg_name;
            $input['Images'][$i]["Iamage"] = $baseurl . "Hotel/" . $jpg_name;
            $img = substr($image, strpos($image, ",") + 1);//take string after ,
            $imgdata = base64_decode($img);
            $success = file_put_contents($path, $imgdata);
            $this->hotelImage->find($ImageID)->update($input['Images'][$i]);
        }
        $output = $this->hotel
            ->with('Images')
            ->select(
                  $this->hotel->getTable().'.*'
                , $this->countey->getTable() . '.CountryID'
                , $this->countey->getTable() . '.CountryNameE as CountryName'
                , $this->area->getTable() . '.AreaID'
                , $this->area->getTable() . '.AreaNameE as AreaName'
                , $this->city->getTable() . '.CityID'
                , $this->city->getTable() . '.CityNameE as CityName'
                
                )
            ->leftjoin($this->city->getTable(), $this->hotel->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->area->getTable(), $this->hotel->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
            ->leftjoin($this->countey->getTable(), $this->hotel->getTable() . '.CountryID', '=', $this->countey->getTable() . '.CountryID')
            ->where('HotelID', '=', $output['HotelID'])
            ->get();
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
        $output = $this->hotel
            ->with('Images')
            ->select( 
                  $this->hotel->getTable().'.*'
                , $this->countey->getTable() . '.CountryID'
                , $this->countey->getTable() . '.CountryNameE as CountryName'
                , $this->area->getTable() . '.AreaID'
                , $this->area->getTable() . '.AreaNameE as AreaName'
                , $this->city->getTable() . '.CityID'
                , $this->city->getTable() . '.CityNameE as CityName')
            ->leftjoin($this->city->getTable(), $this->hotel->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->area->getTable(), $this->hotel->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
            ->leftjoin($this->countey->getTable(), $this->hotel->getTable() . '.CountryID', '=', $this->countey->getTable() . '.CountryID')
            ->where('HotelID', '=', $id)
            ->orderby($this->hotel->getTable().'.HotelID','DESC')
            ->get();
        return Response()->json($output);
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

        $input = Request()->all();
        $output = $this->hotel->find($id)->update($input);

        $output = $this->hotel
            ->with('Images')
            ->select(
                  $this->hotel->getTable().'.*'
                , $this->countey->getTable() . '.CountryID'
                , $this->countey->getTable() . '.CountryNameE as CountryName'
                , $this->area->getTable() . '.AreaID'
                , $this->area->getTable() . '.AreaNameE as AreaName'
                , $this->city->getTable() . '.CityID'
                , $this->city->getTable() . '.CityNameE as CityName')
            ->leftjoin($this->city->getTable(), $this->hotel->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->area->getTable(), $this->hotel->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
            ->leftjoin($this->countey->getTable(), $this->hotel->getTable() . '.CountryID', '=', $this->countey->getTable() . '.CountryID')
            ->orderby($this->hotel->getTable().'.HotelID','DESC')
            ->where('HotelID', '=', $id)
            ->get();
        return Response()->json($output);
    }

    public function creteNewImage()
    {

        $baseurl = 'http://mosaned.zbony.com/public/';
        $input = Request()->all();
        $output = $this->hotelImage->create($input);
        $ImageID = $output['ImageID'];
        $image = $input["Iamage"];
        $jpg_name = "photo-" . $ImageID . ".jpg";
        $path = public_path("/Hotel/") . $jpg_name;
        $input["Iamage"] = $baseurl . "Hotel/" . $jpg_name;
        $img = substr($image, strpos($image, ",") + 1);//take string after ,
        $imgdata = base64_decode($img);
        $success = file_put_contents($path, $imgdata);
        $this->hotelImage->find($ImageID)->update($input);
        $output = $this->hotelImage
            ->where('ImageID', '=', $ImageID)
            ->get();
        return Response()->json($output);


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // $id=(int)$id;
        $this->hotel->where('HotelID', '=', $id)->delete();
        $this>$this->hotelImage->where('HotelID','=',$id)->delete();
        $output = ['Success' => 'Delete Success'];
        return Response()->json($output);
    }

    public function destroyHotelImage($id){

        //$id =(int)$id;
        $this->hotelImage->where('ImageID', '=', $id)->delete();
        $output = ['Success' => 'Deleted Successfuly'];
        return Response()->json($output);
    }
}
