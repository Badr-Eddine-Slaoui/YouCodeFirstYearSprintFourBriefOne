<?php

namespace App\Models;

use Foundations\DB\GoldDigger\Model;

class User extends Model{
    public function books(){
        return $this->belongsToMany(Book::class, foreignKey:"readerId", relatedForeignKey:"bookId");
    }
}