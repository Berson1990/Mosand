<?php
/**
 * Created by PhpStorm.
 * User: Alex4Prog
 * Date: 04/03/2017
 * Time: 11:42 ص
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class AddAqarDetails extends Model
{

    protected $table = 'tbladdaqardetails';
    protected $fillable = ['AqarTypeID', 'AqarPropertyID', 'AddAqarID'];
    protected $primaryKey = 'AddDetails';

    public function AqarType()
    {
        return $this->belongsTo('App\Http\Models\AqarType','AqarTypeID');
    }

    public function AqarProperty()
    {
        return $this->belongsTo('App\Http\Models\AqarProperty','AqarPropertyID');
    }


}