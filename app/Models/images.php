<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    use HasFactory;

    protected $fillable = ['image_id','image_name', 'description', 'image_link'];


    public function tbl_products(){
        return $this->hasMany(tbl_products::class);
    }
    
}
