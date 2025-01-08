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
        Schema::create('home_headers', function (Blueprint $table) {
            $table->id();
            $table->string('Image_1')->nullable();
            $table->string('Title_1');
            $table->string('Image_2')->nullable();
            $table->string('Title_2');
            $table->string('Image_3')->nullable();
            $table->string('Title_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_headers');
    }
};
