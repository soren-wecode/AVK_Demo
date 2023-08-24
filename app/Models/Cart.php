<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Cart extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
    ];

    public function cartProducts(): HasMany
    {
        return $this->hasMany(CartProduct::class);
    }

    public function productOptions(): HasManyThrough
    {
        return $this->hasManyThrough(ProductOption::class, CartProduct::class);
    }
}
