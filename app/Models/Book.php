<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'isbn',
        'year',
        'cover_image',
        'available',
    ];

    public function borrowings()
    {
        return $this->hasMany(Borrowing::class);
    }
}
