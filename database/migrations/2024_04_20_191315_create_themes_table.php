<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->string('title_color', 7)->default('#ffffff');
            $table->string('description_color', 7)->default('#ffffff');
            $table->string('divisor_color', 7)->default('#000000');
            $table->string('testimonial_stars_color', 7)->default('#000000');
            $table->string('testimonial_color', 7)->default('#000000');
            $table->string('testimonial_author_color', 7)->default('#000000');
            $table->string('link_border_color', 7)->default('#000000');
            $table->string('link_text_color', 7)->default('#000000');
            $table->string('link_text_hover_color', 7)->default('#ffffff');
            $table->string('link_background_color', 7)->default('#ffffff');
            $table->string('link_background_hover_color', 7)->default('#000000');
            $table->string('page_background_color', 7)->default('#ffffff');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('themes');
    }
};
