<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('unique_number');
            $table->string('title');
            $table->string('slug');
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('engine')->nullable();
            $table->string('price_per_day');
            $table->unsignedBigInteger('currency_id')->nullable();
            $table->string('quantity')->nullable();
            $table->string('status');
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->string('manual_or_auto')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('number_of_seats')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
};
