<?php

namespace Database\Migrations;

use Foundations\DB\Migrations\Migration;
use Foundations\DB\Migrations\Table;

return new class extends Migration{
    public function up(): void {
        $this->addColumns('book_user', function(Table $table){
            $table->date('due_date')->nullable(true)->default("NULL");
            $table->boolean("is_returned")->default("false");
        });
    }

    public function down(): void{
        $this->dropColumns('book_user', ['due_date', 'is_returned']);
    }
};