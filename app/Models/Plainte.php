<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plainte extends Model
{
    use HasFactory;
    protected $fillable = [
        'motif', 
        'description', 
        'datePlainte', 
        
    ];
    
    
    public function reclamation()
    {
        return $this->belongsTo(Reclamation::class);
    }
}
