<?php
/**
 * Created by PhpStorm.
 * User: Alex4Prog
 * Date: 04/03/2017
 * Time: 11:40 ص
 */
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
class AddAqar extends Model{

    protected $table = 'tbaddaqar';
    protected $fillable = [
        'Title',
        'Adress',
        'Price',
        'CityID',
        'AreaID',
        'CountryID',
        'AqarDesc',
        'Lang',
        'Lat',
        'UserID',
        'OwnerType',
        'Distance',
        'OwnerType',
        'AqarTypeID',
        'AqarProperty1ID',
        'AqarProperty2ID',
        'AqarProperty3ID',
        'State'
    ];
    protected $primaryKey = 'AddAqarID';

    public function images(){

        return $this->hasMany('App\Http\Models\AddAqarImage','AddAqarID');
    }

}