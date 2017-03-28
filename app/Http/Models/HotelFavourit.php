<?php
/**
 * Created by PhpStorm.
 * User: Alex4Prog
 * Date: 20/03/2017
 * Time: 05:26 م
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class HotelFavourit extends Model
{
    protected $table = 'tblhotefavourit';
    protected $fillable =['UserID','HotelID','Favorite'];
    protected  $primaryKey = 'FavoriteID';

}