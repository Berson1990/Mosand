<?php
/**
 * Created by PhpStorm.
 * User: Alex4Prog
 * Date: 04/03/2017
 * Time: 11:50 ص
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
protected $table = 'tblcontactus';
protected $primaryKey ='ContactID';
protected $fillable = ['Message','Phone','UserID'];
}