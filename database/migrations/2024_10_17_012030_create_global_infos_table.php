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
        Schema::create('global_infos', function (Blueprint $table) {
            $table->id();
            $table->string('Company_logo');
            $table->string('Company_name');
            $table->string('Company_address');
            $table->string('Phone');
            $table->string('Whatsapp');
            $table->string('Email_address');
            $table->string('Site_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('global_infos');
    }
};
