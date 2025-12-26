<?php

namespace Database\Migrations;

use Foundations\DB\Migrations\Migration;
use Foundations\DB\Migrations\Table;

return new class extends Migration{
    public function up(): void {
        $this->create('book_user', function(Table $table){
            $table->id();
            $table->bigInt('bookId');
            $table->bigInt('readerId');
            $table->dateTime('borrowDate')->default("CURRENT_TIMESTAMP");
            $table->dateTime("returnDate")->nullable(true);
            $table->foreignKey("bookId")->references("books", "id")->onDelete("CASCADE");
            $table->foreignKey("readerId")->references("users","id")->onDelete("CASCADE");
            $table->timestamps();
        });
    }

    public function down(): void{
        $this->dropIfExists('book_user');
    }
};