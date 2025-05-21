<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';

    // app/Models/Author.php

    protected $fillable = ['name'];


    public function books()

        {
            return $this->hasMany(Book::class);
        }
}
