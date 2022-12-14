<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brief extends Model
{
    use HasFactory;
    public function tasks(){
        return $this->hasMany(task::class,'id');
    }
    public function targetApprentice()
    {
        return $this->belongsToMany(apprentice::class ,'apprentice_brief', 'apprentice_id', 'id_briefs');
    }
}

