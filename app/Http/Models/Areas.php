<?php
/**
 * Created by PhpStorm.
 * User: Alex4Prog
 * Date: 08/03/2017
 * Time: 10:49 ص
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class Areas Extends Model
{
    protected $table = 'tblareas';
    protected $fillable = ['CityID','AreaName','AreaNameE'];
    protected $primaryKey = 'AreaID';

}