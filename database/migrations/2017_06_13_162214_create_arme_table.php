<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armes', function (Blueprint $table) {
            $table->string('serie')->primary();
            $table->increments('id')->unique();
            $table->string('marque');
            $table->string('modele');
            $table->string('calibre');
            $table->longText('memo');
            $table->string('nif_comp');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->timestamp('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('armes');
    }
}
