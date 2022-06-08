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
        Schema::create('role_permissions', function (Blueprint $table) {
            $table->id();

            $table->string("role_uuid", 36);
            $table->foreign("role_uuid")
                ->references("uuid")
                ->on("roles");

            $table->string("permission_uuid", 36);
            $table->foreign("permission_uuid")
                ->references("uuid")
                ->on("permissions");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_permissions');
    }
};
