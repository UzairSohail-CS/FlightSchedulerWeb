<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class passenger extends Model
{
 public function passenger()
 {
 return $this->hasMany(passenger::class,'passenger_id');

 }
}
