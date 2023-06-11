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
        Schema::create('category_minecrafts', function (Blueprint $table) {
            $table->integer('categories_id', 11);
            $table->string('user_app_id');
            $table->integer('app_id');
            $table->string('title');
            $table->text('image');
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
        Schema::dropIfExists('category_minecrafts');
    }
};
