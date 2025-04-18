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
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->text('slug');
            $table->integer('blog_category_id');
            $table->longText('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->text('thumbnail_image')->nullable(); 
            $table->longText('banner')->nullable();
            $table->string('video_provider')->default('youtube')->comment('youtube / vimeo / ...');
            $table->text('video_link')->nullable();
            $table->tinyInteger('is_active')->default(1);
            $table->tinyInteger('is_popular')->default(0);
            $table->mediumText('meta_title')->nullable();
            $table->text('meta_img')->nullable();
            $table->longText('meta_description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
