<?php

namespace App\Http\Controllers;


use App\Providers\RouteServiceProvider;
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
use App\Http\Models\AddAqarImage;
use App\Http\Models\HotelImages;
use Yajra\Datatables\Facades\Datatables;

class AddAqarController extends Controller
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
        $this->addaqarimage = new AddAqarImage();
        $this->hotelImage = new HotelImages();
    }

    public function GetAqarDateALL()
    {
        $output = $this->addaqar->with('images')
            ->select('tbaddaqar.*',
                'tblcity.*',
                'tblaqartype.Pin',
                'tblareas.*',
                'tblcountry.*',
                'tblusers.*',
                'property3.PropertyName as PropertyName1',
                'property3.PFN as PropertyName1_category ',
                'property2.PropertyName as PropertyName2',
                'property2.PFN as PropertyName2_category ',
                'property1.PropertyName as PropertyName3',
                'property1.PFN as PropertyName3_category ',
                $this->aqartype->getTable() . '.*'
            )
            ->leftjoin($this->users->getTable(), $this->addaqar->getTable() . '.UserID', '=', $this->users->getTable() . '.UserID')
            ->leftjoin($this->aqartype->getTable(), $this->addaqar->getTable() . '.AqarTypeID', '=', $this->aqartype->getTable() . '.AqarTypeID')
            ->leftjoin('tblaqarproperty as property1', 'property1.AqarPropertyID', '=', 'tbaddaqar.AqarProperty1ID')
            ->leftjoin('tblaqarproperty as property2', 'property2.AqarPropertyID', '=', 'tbaddaqar.AqarProperty2ID')
            ->leftjoin('tblaqarproperty as property3', 'property3.AqarPropertyID', '=', 'tbaddaqar.AqarProperty3ID')
            ->leftjoin($this->city->getTable(), $this->addaqar->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->country->getTable(), $this->addaqar->getTable() . '.CountryID', '=', $this->country->getTable() . '.CountryID')
            ->leftjoin($this->area->getTable(), $this->addaqar->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
            ->groupby($this->addaqar->getTable() . '.AddAqarID');

        return Datatables::eloquent($output)
            ->addColumn('Stop', function ($Instance) {
                if ($Instance->State == 0) {
                    return "<a data-id='$Instance->AddAqarID' href='#' title='Stop' class='btn btn-danger'  data-target='#Stop'  data-toggle='modal' data-placement='center'><span class='fa fa-ban  MenuSpan'></span></a>";
                } elseif ($Instance->State == 1) {
                    return "<a data-id='$Instance->AddAqarID' href='#' title='Continue' class='btn btn-danger'  data-target='#continue'  data-toggle='modal' data-placement='center'><span class='fa fa-play MenuSpan'></span></a>";
                }
            })->setRowClass(function () {
                return 'text-center';
            })->make(true);


    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $output = $this->addaqar->with('images')
            ->select('tbaddaqar.*',
                'tblcity.*',
                'tblaqartype.Pin',
                'tblareas.*',
                'tblcountry.*',
                'tblusers.*',
                'property3.PropertyName as PropertyName1',
                'property3.PFN as PropertyName1_category ',
                'property2.PropertyName as PropertyName2',
                'property2.PFN as PropertyName2_category ',
                'property1.PropertyName as PropertyName3',
                'property1.PFN as PropertyName3_category ',
                $this->aqartype->getTable() . '.*'
            )
            ->leftjoin($this->users->getTable(), $this->addaqar->getTable() . '.UserID', '=', $this->users->getTable() . '.UserID')
            ->leftjoin($this->aqartype->getTable(), $this->addaqar->getTable() . '.AqarTypeID', '=', $this->aqartype->getTable() . '.AqarTypeID')
            ->leftjoin('tblaqarproperty as property1', 'property1.AqarPropertyID', '=', 'tbaddaqar.AqarProperty1ID')
            ->leftjoin('tblaqarproperty as property2', 'property2.AqarPropertyID', '=', 'tbaddaqar.AqarProperty2ID')
            ->leftjoin('tblaqarproperty as property3', 'property3.AqarPropertyID', '=', 'tbaddaqar.AqarProperty3ID')
            ->leftjoin($this->city->getTable(), $this->addaqar->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->country->getTable(), $this->addaqar->getTable() . '.CountryID', '=', $this->country->getTable() . '.CountryID')
            ->leftjoin($this->area->getTable(), $this->addaqar->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
            ->groupby($this->addaqar->getTable() . '.AddAqarID')
            ->orderby($this->addaqar->getTable().'.AddAqarID','DESC')
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
        $baseurl = 'http://mosaned.zbony.com/public/';
        $input = Request()->all();
//        add noraml image
        if ($input['AqarProperty1ID'] == 0) {
            $input['AqarProperty1ID'] = 101;
        }
        if ($input['AqarProperty2ID'] == 0) {
            $input['AqarProperty2ID'] = 102;
        }
        if ($input['AqarProperty3ID'] == 0) {
            $input['AqarProperty3ID'] = 103;
        }
        $output = AddAqar::create($input);
        $AddAqarID = $output['AddAqarID'];

        for ($i = 0; $i < Count($input['images']); $i++) {

            $input['images'][$i]['AddAqarID'] = $AddAqarID;
            $AddAqarID = $input['images'][$i]['AddAqarID'];
            $output = $this->addaqarimage->create($input['images'][$i]);
            $ImageID = $output['ImageID'];
            //normal Image

            $image = $input['images'][$i]["Iamage"];
            $jpg_name = "photo-" . $ImageID . ".jpg";
            $path = public_path("/AddAqar/") . $jpg_name;
            $input['images'][$i]["Iamage"] = $baseurl . "AddAqar/" . $jpg_name;
            $img = substr($image, strpos($image, ",") + 1);//take string after ,
            $imgdata = base64_decode($img);
            $success = file_put_contents($path, $imgdata);
            //add 360 image
//            $image360 = $input['images'][$i]["Image360"];
//            $jpg_name = "photo-" .  $ImageID . '360' . ".jpg";
//            $path = public_path("/AddAqar/") . $jpg_name;
//            $input['images'][$i]["Image360"] = "AddAqar/" . $jpg_name;
//            $img = substr($image360, strpos($image360, ",") + 1);//take string after ,
//            $imgdata = base64_decode($img);
//            $success = file_put_contents($path, $imgdata);


            $this->addaqarimage->find($ImageID)->update($input['images'][$i]);


        }


        $output = $this->addaqar->with('images')
            ->select('tbaddaqar.*',
                'tblcity.*',
                'tblaqartype.Pin',
                'tblareas.*',
                'tblcountry.*',
                'tblusers.*',
                'property3.PropertyName as PropertyName1',
                'property3.PFN as PropertyName1_category ',
                'property2.PropertyName as PropertyName2',
                'property2.PFN as PropertyName2_category ',
                'property1.PropertyName as PropertyName3',
                'property1.PFN as PropertyName3_category ',
                $this->aqartype->getTable() . '.*'
            )
            ->leftjoin($this->users->getTable(), $this->addaqar->getTable() . '.UserID', '=', $this->users->getTable() . '.UserID')
            ->leftjoin($this->aqartype->getTable(), $this->addaqar->getTable() . '.AqarTypeID', '=', $this->aqartype->getTable() . '.AqarTypeID')
            ->leftjoin('tblaqarproperty as property1', 'property1.AqarPropertyID', '=', 'tbaddaqar.AqarProperty1ID')
            ->leftjoin('tblaqarproperty as property2', 'property2.AqarPropertyID', '=', 'tbaddaqar.AqarProperty2ID')
            ->leftjoin('tblaqarproperty as property3', 'property3.AqarPropertyID', '=', 'tbaddaqar.AqarProperty3ID')
            ->leftjoin($this->city->getTable(), $this->addaqar->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->country->getTable(), $this->addaqar->getTable() . '.CountryID', '=', $this->country->getTable() . '.CountryID')
            ->leftjoin($this->area->getTable(), $this->addaqar->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
            ->where($this->addaqar->getTable() . '.AddAqarID', '=', $AddAqarID)
            ->groupby($this->addaqar->getTable() . '.AddAqarID')
            ->orderby($this->addaqar->getTable().'.AddAqarID','DESC')
            ->get();


        return Response()->json($output);

    }

    private function addpic()
    {

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
            ->select('tbaddaqar.*',
                'tblcity.*',
                'tblareas.*',
                'tblcountry.*',
                'tblaqartype.Pin',
                'tblusers.*',
                'property3.PropertyName as PropertyName1',
                'property3.PFN as PropertyName1_category ',
                'property2.PropertyName as PropertyName2',
                'property2.PFN as PropertyName2_category ',
                'property1.PropertyName as PropertyName3',
                'property1.PFN as PropertyName3_category ',
                $this->aqartype->getTable() . '.*'
            )
            ->leftjoin($this->users->getTable(), $this->addaqar->getTable() . '.UserID', '=', $this->users->getTable() . '.UserID')
            ->leftjoin($this->aqartype->getTable(), $this->addaqar->getTable() . '.AqarTypeID', '=', $this->aqartype->getTable() . '.AqarTypeID')
            ->leftjoin('tblaqarproperty as property1', 'property1.AqarPropertyID', '=', 'tbaddaqar.AqarProperty1ID')
            ->leftjoin('tblaqarproperty as property2', 'property2.AqarPropertyID', '=', 'tbaddaqar.AqarProperty2ID')
            ->leftjoin('tblaqarproperty as property3', 'property3.AqarPropertyID', '=', 'tbaddaqar.AqarProperty3ID')
            ->leftjoin($this->city->getTable(), $this->addaqar->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->country->getTable(), $this->addaqar->getTable() . '.CountryID', '=', $this->country->getTable() . '.CountryID')
            ->leftjoin($this->area->getTable(), $this->addaqar->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
            ->where($this->addaqar->getTable() . '.UserID', '=', $id)
            ->groupby($this->addaqar->getTable() . '.AddAqarID')
            ->orderby($this->addaqar->getTable().'.AddAqarID','DESC')
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

        $output = $this->addaqar->find($id)->update($input);
        $AddAqarID = $id;


        $output = $this->addaqar->with('images')
            ->select('tbaddaqar.*',
                'tblcity.*',
                'tblareas.*',
                'tblcountry.*',
                'tblusers.*',
                'tblaqartype.Pin',
                'property3.PropertyName as PropertyName1',
                'property3.PFN as PropertyName1_category ',
                'property2.PropertyName as PropertyName2',
                'property2.PFN as PropertyName2_category ',
                'property1.PropertyName as PropertyName3',
                'property1.PFN as PropertyName3_category ',
                $this->aqartype->getTable() . '.*'


            )
            ->leftjoin($this->users->getTable(), $this->addaqar->getTable() . '.UserID', '=', $this->users->getTable() . '.UserID')
            ->leftjoin($this->aqartype->getTable(), $this->addaqar->getTable() . '.AqarTypeID', '=', $this->aqartype->getTable() . '.AqarTypeID')
            ->leftjoin('tblaqarproperty as property1', 'property1.AqarPropertyID', '=', 'tbaddaqar.AqarProperty1ID')
            ->leftjoin('tblaqarproperty as property2', 'property2.AqarPropertyID', '=', 'tbaddaqar.AqarProperty2ID')
            ->leftjoin('tblaqarproperty as property3', 'property3.AqarPropertyID', '=', 'tbaddaqar.AqarProperty3ID')
            ->leftjoin($this->city->getTable(), $this->addaqar->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->country->getTable(), $this->addaqar->getTable() . '.CountryID', '=', $this->country->getTable() . '.CountryID')
            ->leftjoin($this->area->getTable(), $this->addaqar->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
            ->where($this->addaqar->getTable() . '.AddAqarID', '=', $id)
            ->groupby($this->addaqar->getTable() . '.AddAqarID')
            ->orderby($this->addaqar->getTable().'.AddAqarID','DESC')
            ->get();

        return Response()->json($output);
    }

    public function creteNewImage()
    {

        $baseurl = 'http://mosaned.zbony.com/public/';
        $input = Request()->all();
        $output = $this->addaqarimage->create($input);
        $ImageID = $output['ImageID'];
        //normal Image
        $image = $input["Iamage"];
        $jpg_name = "photo-" . $ImageID . ".jpg";
        $path = public_path("/AddAqar/") . $jpg_name;
        $input["Iamage"] = $baseurl . "AddAqar/" . $jpg_name;
        $img = substr($image, strpos($image, ",") + 1);//take string after ,
        $imgdata = base64_decode($img);
        $success = file_put_contents($path, $imgdata);
        $this->addaqarimage->find($ImageID)->update($input);

        $output = $this->addaqarimage->where('ImageID', '=', $ImageID)->get();
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
        $this->addaqar->where('AddAqarID', '=', $id)->delete();
        $this->addaqarimage->where('AddAqarID', '=', $id)->delete();
        $output = ['Success' => 'تم الحذف بنجاح'];
        return Response()->json($output);

    }

    public function destroyAqarImage($id)
    {

        $this->addaqarimage->where('ImageID', '=', $id)->delete();
        $output = ['Success' => ' تم الحذف بنجاح'];
        return Response()->json($output);


    }


}

