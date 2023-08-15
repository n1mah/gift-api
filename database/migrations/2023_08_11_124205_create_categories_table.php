<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string("title",127);
            $table->string("title_en",127);
            $table->timestamps();
        });
        DB::table('categories')->insert(
            ['title' => 'موزیک', 'title_en' => 'stream Music',
                'created_at'=>time(),'updated_at'=>time()],
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
