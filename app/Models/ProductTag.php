<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;

class ProductTag extends Model
{
    use HasFactory, SoftDeletes;
    public $table = 'product_tags';

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
