<?php
/**
 * Created by PhpStorm.
 * User: Alex4Prog
 * Date: 04/03/2017
 * Time: 11:52 ص
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected  $table ='tblhotel';
    protected $fillable =[
        'HotelName',
        'SingleRoomPrice',
        'DoubleRoomPrice',
        'SweetPrice',
        'Lang',
        'Lat',
        'CityID',
        'AreaID',
        'CountryID',
        'WhatsApp',
        'Mobile',
        'Website',
        'HotelStars',
        'HotelDescription',
        'RoomCount',
        'State'
    ] ;

    protected  $primaryKey='HotelID';

    public function Images(){

       return $this->hasMany('App\Http\Models\HotelImages','HotelID');
    }

}