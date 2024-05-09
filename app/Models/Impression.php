<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impression extends Model
{
    use HasFactory;
    protected $fillable = [
        'avisService', 
        'commentaire', 
        'dateAvis', 
        
    ];
    
    public function trajet()
    {
        return $this->belongsTo(Trajet::class);
    }
}
