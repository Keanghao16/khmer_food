<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }

    //product_id is a foreign key
    function productImages() : HasMany {
        return $this->hasMany(ProductGallery::class);
    }

    function productSizes() : HasMany {
        return $this->hasMany(ProductSize::class);
    }

    function productOptions() : HasMany {
        return $this->hasMany(ProductOption::class);
    }
}