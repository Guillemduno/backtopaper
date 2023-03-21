<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characther extends Model
{
    use HasFactory;

    public function gender(){
        return $this->belongsTo(Gender::class);
    }

    public function color(){
        return $this->belongsTo(Color::class);
    }
}
