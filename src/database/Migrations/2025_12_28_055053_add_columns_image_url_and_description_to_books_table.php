<?php

namespace Database\Migrations;

use Foundations\DB\Migrations\Migration;
use Foundations\DB\Migrations\Table;

return new class extends Migration{
    public function up(): void {
        $this->addColumns('books', function(Table $table){
            $table->string('image_url')->nullable(true);
            $table->text('description')->nullable(true);
        });
    }

    public function down(): void{
        $this->dropColumns('books', ['image_url', 'description']);
    }
};