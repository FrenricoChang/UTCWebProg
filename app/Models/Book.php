<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'author', 'published_date', 'reading_time'];

    // Relationships
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
