<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{ protected $fillable = ['Nometprenomclient', 'products','quantite','total'];
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }  
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');;
    }
}
