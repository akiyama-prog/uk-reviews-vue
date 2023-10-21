<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    /**
     * この口コミのレストランの情報を取得
     */
    public function resutaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    
    /**
     * この口コミの投稿者情報を取得（ログインしている人のみ）
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
