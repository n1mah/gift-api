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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string("title",127);
            $table->string("description",127);
            $table->string("link",1024);
            $table->string("color_from",63);
            $table->string("color_main",63);
            $table->string("color_to",63);
            $table->string("logo_name",127);
            $table->string("logo",1024);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
