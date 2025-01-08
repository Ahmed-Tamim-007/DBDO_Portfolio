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
        Schema::create('home_sec_ones', function (Blueprint $table) {
            $table->id();

            $table->string('Heading_1');
            $table->string('Heading_2');
            $table->string('Paragraph');

            $table->string('Card_img_1');
            $table->string('Card_title_1');
            $table->string('Card_para_1');
            $table->string('Card_dsg_1');
            $table->string('Card_link_1');

            $table->string('Card_img_2');
            $table->string('Card_title_2');
            $table->string('Card_para_2');
            $table->string('Card_dsg_2');
            $table->string('Card_link_2');

            $table->string('Card_img_3');
            $table->string('Card_title_3');
            $table->string('Card_para_3');
            $table->string('Card_dsg_3');
            $table->string('Card_link_3');

            $table->string('Card_img_4');
            $table->string('Card_title_4');
            $table->string('Card_para_4');
            $table->string('Card_dsg_4');
            $table->string('Card_link_4');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_sec_ones');
    }
};
