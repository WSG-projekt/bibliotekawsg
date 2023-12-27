<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BooksModel extends Model
{
    use HasFactory;

    protected $table = 'books_collection';
    protected $primaryKey = 'id';

    public function BooksCategory()
    {
        return $this->hasMany(BooksCategory::class)
    }
}
