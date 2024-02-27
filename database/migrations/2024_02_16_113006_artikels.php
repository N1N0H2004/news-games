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
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->string('titel');
            $table->text('inhoud');
            $table->foreignId('tag_id')->constrained('tags');
            $table->foreignId('categorie_id')->constrained('categories');
            $table->foreignId('game_id')->constrained('games');
            $table->foreignId('photo_id')->constrained('photos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
