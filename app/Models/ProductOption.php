<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductOption extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'product_id',
        'ref_nr',
        'vvs_nr',
        'dn',
        'price',
        'stock',
    ];

    public function product() : BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
