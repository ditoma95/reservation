<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encaisser extends Model
{
    use HasFactory;
    protected $fillable = [
        'typePaiement', 
        'codeSecret', 
        'montant', 
        'dateEncaissement',
        
    ];
    
    
    public function conducteur()
    {
        return $this->belongsTo(Conducteur::class);
    }

}
