<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_tags extends Model
{

    protected $fillable = ['tag_id','tag_name', 'tag_description', 'publication_status'];

    public function tbl_products(){
        return $this->hasMany(tbl_products::class , 'category_id');
    }
    use HasFactory;

}
