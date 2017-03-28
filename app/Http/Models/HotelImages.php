<?php
/**
 * Created by PhpStorm.
 * User: Alex4Prog
 * Date: 12/03/2017
 * Time: 09:40 ص
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class HotelImages extends Model
{
    protected $table ='tblhotelimage';
    protected  $fillable =['Iamage','Image360','HotelID'];
    protected  $primaryKey ='ImageID';



}