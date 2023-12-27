<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Books extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'category_id'
    ];
    protected $table = 'books';
    protected $primaryKey = 'id';


    public function booksCategory(): BelongsTo
    {
        return $this->belongsTo(BooksCategory::class);
    }
}
