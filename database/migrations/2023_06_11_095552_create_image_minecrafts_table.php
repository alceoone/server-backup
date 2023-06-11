<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_minecrafts', function (Blueprint $table) {
            $table->integer('images_id', 11);
            $table->string('title')->nullable();
            $table->text('thumbnail')->nullable();
            $table->text('assets_image')->nullable();
            $table->string('folder')->nullable();
            $table->string('type_thumbnail')->nullable();
            $table->integer('size_thumbnail')->nullable();
            $table->string('type')->nullable();
            $table->integer('size')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_minecrafts');
    }
};
