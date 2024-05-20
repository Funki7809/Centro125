<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'categories_id',
        'pictures_id',
        'authors_id'
    ];

    public function author(): BelongsTo 
    {
        return $this->belongsTo(Author::class,'authors_id');
    }

    public function category(): BelongsTo 
    {
        return $this->belongsTo(Category::class,'categories_id');
    }

    public function picture(): BelongsTo 
    {
        return $this->belongsTo(Picture::class,'pictures_id');
    }
}
