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
        Schema::create('addresses', function (Blueprint $table) {
            $table->string("uuid", 36)->primary();
            $table->string("address", 255);
            $table->string("postal_code")->nullable();

            $table->unsignedBigInteger("municipality_id");
            $table->foreign("municipality_id")
                ->references("id")
                ->on("municipalities");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
};
