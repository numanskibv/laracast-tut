<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    protected $guarded = []; // only while developing;

   // protected $with = ['category', 'author']; use so you can remove this on the eloquent statement(Eager load relation)

    //protected $fillable = ['title', 'excerpt', 'body', 'slug', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class); // posts horen bij category 
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id'); // posts horen bij user nu author
        // add user_id if other name used in dit geval author
    }
}

