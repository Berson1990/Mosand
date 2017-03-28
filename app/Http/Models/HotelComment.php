<?php
/**
 * Created by PhpStorm.
 * User: Alex4Prog
 * Date: 20/03/2017
 * Time: 05:26 م
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class HotelComment extends Model
{
    protected $table='tblhotelcomment';
    protected $fillable=['HotelID','Comment','UserID'];
    protected $primaryKey='CommentID';

}