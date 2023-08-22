<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type extends Model
{
 public function attendant()
 {
 return $this->hasMany(attendant::class,'type_id');

 }

}
