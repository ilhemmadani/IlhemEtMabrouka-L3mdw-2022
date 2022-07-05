<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
  protected $fillable = [
'id',
    'nomproduit',
    'designiation' ,
    'quantite',
    'pourcentageprod',
    'image',
  
    'prixUT',
    'type'
];
public function getPrice()
    {
        $prixUT = $this->prixUT / 100;

        return number_format($price, 2, ',', ' ') . ' €';
    }
    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }
    public function paniers()
    {
        return $this->hasMany('App\Panier');
    }
}
