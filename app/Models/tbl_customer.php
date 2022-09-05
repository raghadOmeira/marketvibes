<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_customer extends Model

    {   protected $fillable = ['customer_name','customer_email', 'password', 'mobile_number' ];

        public function tbl_order(){
            return $this->hasMany(tbl_order::class);
        }
        public function tbl_payment(){
            return $this->belongsTo(tbl_payment::class);
        }
    
        use HasFactory;
    }