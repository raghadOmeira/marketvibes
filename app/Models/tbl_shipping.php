<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_shipping extends Model
{   protected $fillable = ['shipping_email','shipping_first_name', 'shipping_last_name', 'shipping_address', 'shipping_mobile_number', 'shipping_city' ];

    public function tbl_order(){
        return $this->belongsTo(tbl_order::class);
    }
    use HasFactory;
}