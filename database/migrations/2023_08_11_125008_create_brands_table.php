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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->foreign('category_id')
                ->references('id')->on('categories')->onDelete('cascade');
            $table->string("title",127);
            $table->string("title_en",127);
            $table->text("description");
            $table->string("logo",1024);
            $table->string("logo_filter",1024);
            $table->timestamps();
        });
        DB::table('brands')->insert(
            [
                'category_id' => '1',
                'title' => 'اسپاتیفای',
                'title_en' => 'spotify',
                'description' => 'spotify stream Music ...',
                'logo' => 'https://nimaheidari.storage.iran.liara.space/images/spotify-logo.png',
                'logo_filter' => 'https://nimaheidari.storage.iran.liara.space/images/spotify-logo.png',
            ],
        );
        DB::table('brands')->insert(
            [
                'category_id' => '1',
                'title' => 'سووندکلود',
                'title_en' => 'soundcloud',
                'description' => 'soundcloud stream Music ...',
                'logo' => 'https://nimaheidari.storage.iran.liara.space/images/soundcloud-logo.png',
                'logo_filter' => 'https://nimaheidari.storage.iran.liara.space/images/soundcloud-logo.png',
            ],
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
