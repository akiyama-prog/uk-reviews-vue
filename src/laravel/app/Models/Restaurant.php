<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    
    /**
     * レストランのジャンルを取得
     */
    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }
    
    /**
     * レストランの口コミを取得
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Restaurant::class);
    }
}
