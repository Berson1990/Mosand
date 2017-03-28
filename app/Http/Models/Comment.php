<?php
/**
 * Created by PhpStorm.
 * User: Alex4Prog
 * Date: 04/03/2017
 * Time: 11:48 ص
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='tblcomment';
    protected $fillable=['AddAqarID','Comment','UserID'];
    protected $primaryKey='CommentID';


}