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
        Schema::create('app_minecrafts', function (Blueprint $table) {
            $table->integer('app_id', 11);
            $table->string('user_app_id');
            $table->string('title');
            $table->text('deskripsi');
            $table->string('package');
            $table->string('key');
            $table->enum('status', array('delete', 'active'))->default('active');
            $table->text('image_icon');
            $table->string('subKey')->nullable();
            $table->text('privacy_policy')->nullable();
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
        Schema::dropIfExists('app_minecrafts');
    }
};
