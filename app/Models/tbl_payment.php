<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_payment extends Model
{   protected $fillable = ['payment_method','payment_status'];

    public function tbl_order(){
        return $this->belongsTo(tbl_order::class);
    }
    use HasFactory;
}