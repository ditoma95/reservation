<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;
    protected $fillable = [
        'typePaiement', 
        'telephone', 
        'montant', 
        'datePaiement',
    ];


    protected $primaryKey = 'paiement_id';
    
    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
    
}
