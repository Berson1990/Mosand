<?php
/**
 * Created by PhpStorm.
 * User: Alex4Prog
 * Date: 04/03/2017
 * Time: 11:44 ص
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class AqarProperty extends Model
{
     protected $table ='tblaqarproperty';
     protected  $fillable=['AqarTypeID','PropertyName','PropertyNameE','Icone'];
     protected $primaryKey='AqarPropertyID';


}