<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprentice extends Model
{
    use HasFactory;
    public function promotion()
    {
        return $this->belongsTo(promotion::class);
    }
    
    public function assignedBrief()
    {
        return $this->belongsToMany(brief::class, 'apprentice_brief', 'apprentice_id', 'id_briefs');
    }
}
