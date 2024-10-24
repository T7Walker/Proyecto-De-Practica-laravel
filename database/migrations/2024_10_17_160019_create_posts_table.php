<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->varchar(45)->name;
            $table->varchar(45)->slug;
            $table->varchar(45)->extrac;
            $table->varchar(45)->body;
            $table->varchar(45)->body;
            $table->varchar(45)->stats;
            $table->int()->category_id;
            $table->int()->user_id;


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
