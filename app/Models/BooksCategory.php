<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BooksCategory extends Model
{
    use HasFactory;

    protected $table = 'books_category';
    protected $primaryKey = 'id';
    protected $fillable = ['category_name'];

    public function BooksCollection()
    {
        return $this->hasMany(BooksCollection::class);
    }

}
