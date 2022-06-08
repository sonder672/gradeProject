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
        Schema::create('users', function (Blueprint $table) {
            $table->string("id", 11)->primary();
            $table->string("name");
            $table->string("email");
            $table->string("password");

            $table->string("role_uuid", 36);
            $table->foreign("role_uuid")
                ->references("uuid")
                ->on("roles");

            $table->unsignedBigInteger("department_id");
            $table->foreign("department_id")
                ->references("id")
                ->on("departments");

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
        Schema::dropIfExists('users');
    }
};
