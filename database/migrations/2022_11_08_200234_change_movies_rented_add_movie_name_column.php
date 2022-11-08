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
        Schema::table('movies_rented', function (Blueprint $table) {
            $table->string('movie_name', 100)->nullable()->default('No Name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies_rented', function (Blueprint $table) {
            $table->dropColumn('movie_name');
        });
    }
};
