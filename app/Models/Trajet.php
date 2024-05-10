<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    use HasFactory;

    protected $fillable = [
        'dateDepart', 
        'lieuDepart',
        'lieuArrive',
        'heurDepart',
        'lieuEscale',
        'tarif',
        'nombrePlaceDisponible',
        'voiture_id',
    ];
    
    public function conducteur()
    {
        return $this->belongsTo(Conducteur::class);
    }
    
    public function voiture()
    {
        return $this->belongsTo(Voiture::class);
    }
    
    
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    
    
    public function reclamations()
    {
        return $this->hasMany(Reclamation::class);
    }
    
    
    public function impression()
    {
        return $this->hasOne(Impression::class);
    }

}
