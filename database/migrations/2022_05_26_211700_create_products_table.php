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
        Schema::create('products', function (Blueprint $table) {
            $table->string("uuid", 36)->primary();
            $table->unsignedBigInteger("price");
            $table->smallInteger("stock");

            $table->string("hex_cod_color", 15)->nullable();
            $table->foreign('hex_cod_color') // UNSIGNED BIG INT
                ->references('hex_code')
                ->on('colours');

            $table->unsignedBigInteger("size_id")->nullable();
            $table->foreign('size_id') // UNSIGNED BIG INT
                ->references('id')
                ->on('sizes');

            $table->unsignedBigInteger("customizable_id");
            $table->foreign('customizable_id') // UNSIGNED BIG INT
                ->references('id')
                ->on('customizables');

            $table->string("category_uuid", 36);
            $table->foreign('category_uuid') // UNSIGNED BIG INT
                ->references('uuid')
                ->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
