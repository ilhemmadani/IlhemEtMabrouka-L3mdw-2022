<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    

    protected $fillable = ['nomclient', 'prenomclient','email','monatnt', 'telephone','adresse','produits'];
   
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
