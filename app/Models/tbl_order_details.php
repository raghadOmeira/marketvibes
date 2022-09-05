<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_details extends Model
{
  
    protected $fillable = ['order_id','product_id','product_name', 'product_price', 'product_sales_quantity', 'sub_total'];

    public function tbl_order(){
        return $this->belongsTo(tbl_order::class);
    }
    public function tbl_products(){
        return $this->belongsTo(tbl_products::class);
    }

    use HasFactory;
}