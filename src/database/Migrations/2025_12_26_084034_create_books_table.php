<?php

namespace Database\Migrations;

use Foundations\DB\Migrations\Migration;
use Foundations\DB\Migrations\Table;

return new class extends Migration{
    public function up(): void {
        $this->create('books', function(Table $table){
            $table->id();
            $table->string("title");
            $table->string("author")->size(150);
            $table->integer("year");
            $table->enum('status', ['available', 'borrowed'])->default('available');
            $table->timestamps();
        });
    }

    public function down(): void{
        $this->dropIfExists('books');
    }
};