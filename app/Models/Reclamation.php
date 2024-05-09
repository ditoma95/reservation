<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;

    protected $fillable = [
        'motif', 
        'etat', 
        'dateReclamation', 
        
    ];
    
    public function trajets()
    {
        return $this->belongsTo(Trajet::class);
    }
    
    
    public function plaintes()
    {
        return $this->hasMany(Plainte::class);
    }
}
