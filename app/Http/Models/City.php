<?php
/**
 * Created by PhpStorm.
 * User: Alex4Prog
 * Date: 08/03/2017
 * Time: 10:47 ص
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table='tblcity';
    protected $fillable =['CountryID','CityName','CityNameE'];
    protected $primaryKey ='CityID';

}