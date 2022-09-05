<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_categories extends Model
{

    protected $fillable = ['category_id','category_name', 'category_description', 'publication_status'];

    public function tbl_products(){
        return $this->hasMany(tbl_products::class);
    }
    use HasFactory;
}
