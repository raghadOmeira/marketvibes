<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_order extends Model
{   protected $fillable = ['customer_id','payment_id', 'order_total', 'note', 'order_status', 'cart_confirmation' ];

    public function tbl_customer(){
        return $this->belongsTo(tbl_customer::class);
    }
    public function tbl_payment(){
        return $this->belongsTo(tbl_payment::class);
    }

    use HasFactory;
}