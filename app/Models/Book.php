<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author'
    ];

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }

    public function reservations()
    {
        return $this->belongsToMany(Reservation::class, 'reservations_books');
    }
    public function rentals()
    {
        return $this->belongsToMany(Rental::class, 'rentals_books');
    }

}
