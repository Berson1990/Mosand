<?php
/**
 * Created by PhpStorm.
 * User: Alex4Prog
 * Date: 04/03/2017
 * Time: 11:46 ص
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class AqarType extends Model
{
     protected $table = 'tblaqartype';
    protected $fillable =['AqarTypeName','AqarTypeNameE','Icone'];
    protected $primaryKey = 'AqarTypeID';
    public  function aqarperopery(){

        return $this->hasMany('App\Http\Models\AqarProperty','AqarTypeID');
     }

}