<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $table = 'products_details';
    protected $primaryKey = 'id';
    protected $quarded = [];

    public function product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
