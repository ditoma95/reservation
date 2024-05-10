<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'dateDepart', 
        'lieuDepart',
        'lieuArrive',
        'heurDepart',
        'nombrePlace',
        
        
    ];
    
    public function trajets()
    {
        return $this->belongsTo(Trajet::class,"trajet_id");
    }
    
    public function paiement()
    {
        return $this->hasOne(Paiement::class);
    }
    
    public function passager()
    {
        return $this->belongsTo(Passager::class);
    }
}
