<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLostProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lost_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('qrcode_id')->nullable();
            $table->string('img_urls');
            $table->json('location');
            $table->boolean('founded')->default(false);
            $table->string('message');
            $table->foreignId('category_id');
            $table->foreignId('user_id');
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
        Schema::dropIfExists('lost_products');
    }
}
