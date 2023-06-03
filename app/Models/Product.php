<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ProductTag;

class Product extends Model
{
    use HasFactory;
    public $table = 'product';

    public function tags()
    {
        return $this->belongsToMany(ProductTag::class);
    }
}
