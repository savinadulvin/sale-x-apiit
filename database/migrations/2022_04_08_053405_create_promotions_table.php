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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('product_id')->unsigned()->nullable();

            $table->foreign('product_id')->references('id')->on('products');

            $table->bigInteger('manufacturer_id')->unsigned()->nullable();

            $table->foreign('manufacturer_id')->references('id')->on('manufacturers');

            $table->bigInteger('vehicle_model_id')->unsigned()->nullable();

            $table->foreign('vehicle_model_id')->references('id')->on('vehicle_models');

            $table->bigInteger('delivery_method_id')->unsigned()->nullable();

            $table->foreign('delivery_method_id')->references('id')->on('delivery_methods');

            $table->string('name');

            $table->longText('description')->nullable();

            $table->string('image')->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotions');
    }
};
