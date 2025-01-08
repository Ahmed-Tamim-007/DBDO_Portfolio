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
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->string('st_num_1');
            $table->string('st_title_1');
            $table->string('st_para_1');

            $table->string('st_num_2');
            $table->string('st_title_2');
            $table->string('st_para_2');

            $table->string('st_num_3');
            $table->string('st_title_3');
            $table->string('st_para_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stats');
    }
};
