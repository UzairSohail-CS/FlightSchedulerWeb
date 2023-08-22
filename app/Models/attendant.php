<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attendant extends Model
{
    public function type()
    {
    return $this->belongsTo(type::class,'type_id');
    }
    use HasFactory;
}
