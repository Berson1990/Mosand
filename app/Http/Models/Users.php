<?php
/**
 * Created by PhpStorm.
 * User: Alex4Prog
 * Date: 04/03/2017
 * Time: 11:55 ص
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
protected $table = 'tblusers';
protected $fillable =['Phone','UserName','Password','ConfirmPassword','UserPicture','Email','UserType','State','DivceTypeID','Token'];
protected $primaryKey = 'UserID';
}