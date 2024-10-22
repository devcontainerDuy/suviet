<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Images extends Model
{
    use HasFactory;

    protected $table = 'images'; // Tên bảng trong database 

    protected $fillable = [
        'link',
        'product_id',
    ];

    // Định nghĩa mối quan hệ với model Product (nếu có)
    public function product(): BelongsTo
    {
        return $this->belongsTo(related: Products::class);
    }
}
