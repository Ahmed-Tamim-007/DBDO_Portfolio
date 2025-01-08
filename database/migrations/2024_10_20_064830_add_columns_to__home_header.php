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
        Schema::table('home_headers', function (Blueprint $table) {
            $table->string('About_header_img')->nullable();
            $table->string('Product_header_img')->nullable();
            $table->string('Blog_header_img')->nullable();
            $table->string('Contact_header_img')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('home_headers', function (Blueprint $table) {
            $table->dropColumn(['About_header_img', 'Product_header_img', 'Blog_header_img', 'Contact_header_img']);
        });
    }
};
