<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Rental extends Model
{
    use HasFactory;
    protected $fillable = [
        'rental_date',
        'return_date',
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class,'id');
    }

    public function books(): belongsToMany
    {
        return $this->belongsToMany(Book::class, 'rentals_books');
    }

}
