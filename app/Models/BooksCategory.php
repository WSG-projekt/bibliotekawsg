<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BooksCategory extends Model
{
    use HasFactory;

    protected $table = 'books_category';
    protected $primaryKey = 'id';
    protected $fillable = ['category_name'];

    public function books(): HasMany
    {
        return $this->hasMany(Books::class);
    }

}
