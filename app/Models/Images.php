<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Images extends Model
{
    use HasFactory;

    protected $table = 'images';

    protected $fillable = [
        'link',
        'product_id',
        'created_at',
        'updated_at',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(related: Products::class);
    }
}
