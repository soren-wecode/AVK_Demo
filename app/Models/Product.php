<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ProductOption;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'variant_name',
        'connection',
        'material',
        'dn',
        'pn',
        'closing_direction'
    ];

    public function options() : HasMany
    {
        return $this->hasMany(ProductOption::class);
    }
}
