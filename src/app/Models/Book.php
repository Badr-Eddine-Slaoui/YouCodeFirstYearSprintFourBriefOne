<?php

namespace App\Models;

use Foundations\DB\GoldDigger\Model;

class Book extends Model{
    public function users(){
        return $this->belongsToMany(User::class, foreignKey: "bookId", relatedForeignKey: "readerId");
    }
}