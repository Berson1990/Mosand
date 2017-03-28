<?php
/**
 * Created by PhpStorm.
 * User: Alex4Prog
 * Date: 09/03/2017
 * Time: 04:35 م
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $table = 'tblfavorite';
    protected $fillable =['UserID','AddAqarID','Favorite'];
    protected  $primaryKey = 'FavoriteID';
    public function AqarIamge(){
        return $this->belongsTo('App\Http\Models\AddAqar','AddAqarID');
    }

}