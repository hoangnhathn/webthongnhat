<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = 'products_category';
    protected $primaryKey = 'id';
    protected $quarded = [];

    public function products(){
        return $this->hasMany(Product::class,'category_id','id');
    }
}
