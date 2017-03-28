<?php
/**
 * Created by PhpStorm.
 * User: Alex4Prog
 * Date: 08/03/2017
 * Time: 04:32 م
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'tblcountry';
    protected  $fillable = ['CountryName','CountryNameE','Alomala'];
    protected  $primaryKey = 'CountryID';

}