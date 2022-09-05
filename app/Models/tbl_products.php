<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_products extends Model
{
   
    protected $fillable = ['category_id','tag_id','product_name', 'product_size', 'description', 'product_price', 'product_image' ,'product_color' ,'publication_status'];

    public function category(){
        return $this->belongsTo(tbl_categories::class);
    }
    public function tag(){
        return $this->belongsTo(tbl_tags::class);
    }
    public function productImage(){
        return $this->hasMany(product_image::class);
    }
    public function tbl_order_details(){
        return $this->hasMany(tbl_order_details::class);
    }

    use HasFactory;
}