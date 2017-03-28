<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;
use App\Http\Requests;
use App\Http\Models\Users;
use App\Http\Models\Comment;
use App\Http\Models\AqarType;
use App\Http\Models\AqarProperty;
use App\Http\Models\AddAqarDetails;

use App\Http\Models\AddAqar;
use App\Http\Models\City;
use App\Http\Models\Areas;
use App\Http\Models\Country;
use App\Http\Models\AddAqarImage;
Use DB;
use Symfony\Component\Console\Formatter\OutputFormatter;


class CommentController extends Controller
{
    public function __construct()
    {
        $this->comment = new Comment();
        $this->user = new Users();
        $this->aqartype = new AqarType();
        $this->aqarproperty = new AqarProperty();
        $this->addaqar = new AddAqar();
        $this->addaqardetails = new AddAqarDetails();
        $this->city = New City();
        $this->area = New Areas();
        $this->country = new Country();
        $this->addaqarimage = new AddAqarImage();

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $output = Comment::all();
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
        $input = Request()->all();
        $UserID = $input['UserID'];
        $output = Comment::create($input);
        $commentID = $output['CommentID'];
        $output = $this->comment
            ->leftjoin($this->user->getTable(), $this->comment->getTable() . '.UserID', '=', $this->user->getTable() . '.UserID')
            ->where('CommentID', '=', $commentID)
            ->get();

        $AddAqarID = $output[0]['AddAqarID'];

        $output2 = $this->addaqar
            ->leftjoin($this->user->getTable(), $this->addaqar->getTable() . '.UserID', '=', $this->user->getTable() . '.UserID')
            ->where($this->addaqar->getTable() . '.AddAqarID', '=', $AddAqarID)
            ->get();
        $WonerUserID = $output2[0]['UserID'];

        if ($WonerUserID == $UserID) {

            $output3 = $this->comment
                ->leftjoin($this->user->getTable(), $this->comment->getTable() . '.UserID', '=', $this->user->getTable() . '.UserID')
                ->where('AddAqarID', '=', $AddAqarID)
                ->where($this->user->getTable() . '.UserID', '!=', $WonerUserID)
                ->orderby('CommentID', 'DESC')
                ->limit(1)
                ->get();


            $Token = $output3[0]['Token'];
            if ($output3[0]['DivceTypeID'] == 2) {
                $this->pushAndroid($Token, "COMMENT", $commentID, $AddAqarID);
            } else if ($output3[0]['DivceTypeID'] == 1) {
                $this->pushIOS($Token, "COMMENT", $commentID, $WonerUserID);
            }

        } else {

            // dd('Onther User Comment On Owner ');
            $output3 = $this->user
                ->where($this->user->getTable() . '.UserID', '=', $WonerUserID)
                ->get();

            $Token = $output3[0]['Token'];
            if ($output3[0]['DivceTypeID'] == 2) {
                $this->pushAndroid($Token, "COMMENT", $commentID, $AddAqarID);
            } else if ($output3[0]['DivceTypeID'] == 1) {
                $this->pushIOS($Token, "COMMENT", $commentID, $WonerUserID);
            }


        }


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
        $output = $this->comment
            ->leftjoin($this->user->getTable(), $this->comment->getTable() . '.UserID', '=', $this->user->getTable() . '.UserID')
            ->where($this->comment->getTable() . '.AddAqarID', '=', $id)
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
        //
    }

    function pushAndroid($Token, $Title, $CommentID, $AddAqarID)
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
            ->leftjoin($this->user->getTable(), $this->addaqar->getTable() . '.UserID', '=', $this->user->getTable() . '.UserID')
            ->leftjoin($this->aqartype->getTable(), $this->addaqar->getTable() . '.AqarTypeID', '=', $this->aqartype->getTable() . '.AqarTypeID')
            ->leftjoin('tblaqarproperty as property1', 'property1.AqarPropertyID', '=', 'tbaddaqar.AqarProperty1ID')
            ->leftjoin('tblaqarproperty as property2', 'property2.AqarPropertyID', '=', 'tbaddaqar.AqarProperty2ID')
            ->leftjoin('tblaqarproperty as property3', 'property3.AqarPropertyID', '=', 'tbaddaqar.AqarProperty3ID')
            ->leftjoin($this->city->getTable(), $this->addaqar->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->country->getTable(), $this->addaqar->getTable() . '.CountryID', '=', $this->country->getTable() . '.CountryID')
            ->leftjoin($this->area->getTable(), $this->addaqar->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
            ->where($this->addaqar->getTable() . '.AddAqarID', '=', $AddAqarID)
            ->groupby($this->addaqar->getTable() . '.AddAqarID')
            ->get();


        $registrationIds = array($Token);

        $msg = array
        (
            'AqarObject' => $output,
            'title' => $Title,
            'CommentID' => $CommentID,
            'subtitle' => '',
            'tickerText' => '',
            'vibrate' => 1,
            'sound' => 1,
        );

        $fields = array
        (
            'registration_ids' => $registrationIds,
            'data' => $msg,
        );

        $headers = array
        ( //Google API Key
            'Authorization: key=' . 'AIzaSyDgI8IFsKecXN-86BV0g-j0WLbxzSvriA4',
            'Content-Type: application/json',
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://android.googleapis.com/gcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        curl_close($ch);

        // print_r($registrationIds);
        // echo $result->success;
        // echo ("1");
    }


    function pushIOS($Token, $Title, $CommentID, $AddAqarID)
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
            ->leftjoin($this->user->getTable(), $this->addaqar->getTable() . '.UserID', '=', $this->user->getTable() . '.UserID')
            ->leftjoin($this->aqartype->getTable(), $this->addaqar->getTable() . '.AqarTypeID', '=', $this->aqartype->getTable() . '.AqarTypeID')
            ->leftjoin('tblaqarproperty as property1', 'property1.AqarPropertyID', '=', 'tbaddaqar.AqarProperty1ID')
            ->leftjoin('tblaqarproperty as property2', 'property2.AqarPropertyID', '=', 'tbaddaqar.AqarProperty2ID')
            ->leftjoin('tblaqarproperty as property3', 'property3.AqarPropertyID', '=', 'tbaddaqar.AqarProperty3ID')
            ->leftjoin($this->city->getTable(), $this->addaqar->getTable() . '.CityID', '=', $this->city->getTable() . '.CityID')
            ->leftjoin($this->country->getTable(), $this->addaqar->getTable() . '.CountryID', '=', $this->country->getTable() . '.CountryID')
            ->leftjoin($this->area->getTable(), $this->addaqar->getTable() . '.AreaID', '=', $this->area->getTable() . '.AreaID')
            ->where($this->addaqar->getTable() . '.AddAqarID', '=', $AddAqarID)
            ->groupby($this->addaqar->getTable() . '.AddAqarID')
            ->get();

        $deviceToken = $Token;

        $passphrase = 'P@$$2015';

        // Put your alert message here:

        ////////////////////////////////////////////////////////////////////////////////

        $ctx = stream_context_create();
        stream_context_set_option($ctx, 'ssl', 'local_cert', 'pushcert.pem');
        stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);

        // Open a connection to the APNS server
        $fp = stream_socket_client(
            'ssl://gateway.push.apple.com:2195', $err,
            $errstr, 60, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT, $ctx);

        if (!$fp) {
            exit("Failed to connect: $err $errstr" . PHP_EOL);
        }

        //echo 'Connected to APNS' . PHP_EOL;

        // Create the payload body
        $body['aps'] = array(

            'AqarObject' => $output,
            'title' => $Title,
            'CommentID' => $CommentID,
            'subtitle' => '',
            'tickerText' => '',
            'badge' => 1,
            'sound' => 'default',

//            'pushtype'=>$pushtype,
//            'title' => $Title,
//            'alert' => $message,
//            'sound' => 'default',
//            'badge' => 1,
//            'OrderID'=>$OrderID
        );

        // Encode the payload as JSON
        $payload = json_encode($body);

        // Build the binary notification
        $msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;

        // Send it to the server
        $result = fwrite($fp, $msg, strlen($msg));

        if (!$result) {
            //echo 'Message not delivered' . PHP_EOL;
        } else {
            //echo 'Message successfully delivered' . PHP_EOL;
        }

        // Close the connection to the server
        fclose($fp);
    }


}
