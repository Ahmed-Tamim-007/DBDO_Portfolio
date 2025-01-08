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
        Schema::create('sub__ports', function (Blueprint $table) {
            $table->id();
            $table->string('sub_h');
            $table->string('sub_p');
            $table->string('portfolio_h1');
            $table->string('portfolio_h2');
            $table->string('portfolio_para');

            $table->string('portfolio_img_1');
            $table->string('portfolio_1_h1');
            $table->string('portfolio_1_h2');
            $table->string('portfolio_para_1');

            $table->string('portfolio_img_2');
            $table->string('portfolio_2_h1');
            $table->string('portfolio_2_h2');
            $table->string('portfolio_para_2');

            $table->string('portfolio_img_3');
            $table->string('portfolio_3_h1');
            $table->string('portfolio_3_h2');
            $table->string('portfolio_para_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub__ports');
    }
};
