<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model

    {
        use HasFactory;
        protected $fillable = [
        'nomservice','image'
        ];
        public function contact()
        {
            return $this->belongsTo('App\Contact');;
        }
        public function user()
        {
            return $this->belongsTo('App\User');;
        }

        }
