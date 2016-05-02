<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title','author','published','cover','purchase_link'];

    public function author() {
        return $this->belongsTo('\App\Author');
    }

    public function tags() {
        return $this->belongsToMany('\App\Tag')->withTimestamps();
    }

    public static function getAllBooksWithAuthors() {
        return \App\Book::with('author')->orderBy('id','desc')->get();
    }

}
