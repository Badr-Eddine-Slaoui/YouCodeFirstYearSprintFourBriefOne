<?php

namespace App\Models;

use Foundations\DB\GoldDigger\Model;

class BookUser extends Model{
    protected static ?string $table = "book_user";

    public function user(){
        return $this->belongsTo(User::class, "readerId");
    }

    public function book(){
        return $this->belongsTo(Book::class, "bookId");
    }
}