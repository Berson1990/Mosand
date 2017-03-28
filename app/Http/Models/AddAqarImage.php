<?php
/**
 * Created by PhpStorm.
 * User: Alex4Prog
 * Date: 12/03/2017
 * Time: 09:35 ص
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class AddAqarImage extends Model {
    protected $table = 'tbladdaqarimage';
    protected $fillable = ['Iamage','Image360','AddAqarID'];
    protected $primaryKey = 'ImageID';


}