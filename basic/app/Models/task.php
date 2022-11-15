<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;
    public function briefs(){
        return $this->belongsTo(brief::class,'id_briefs','id');
    }
}
