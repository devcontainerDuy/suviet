<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'name',
        'price',
        'sale',
        'import_date',
        'description',
        'short_description',
        'is_show',
        'category_id',
        'quantity',
        'created_at',
        'updated_at',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(related: Categories::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Images::class, 'product_id', 'id');
    }
}
