<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    protected $fillable = [
        'immatriculation',
        'voiture_image',
        'nombrePlace'
    ];

    // protected $primaryKey = 'voiture_id';

    public function trajets()
    {
        return $this->hasMany(Trajet::class);
    }
}
