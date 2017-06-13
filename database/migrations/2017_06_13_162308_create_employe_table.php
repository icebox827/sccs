<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->string('nom');
            $table->string('prenom');
            $table->string('nif');
            $table->string('cin');
            $table->string('sexe');
            $table->date('datenaissance');
            $table->string('adresse');
            $table->integer('phone');
            $table->string('email');
            $table->string('fonction');
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
        Schema::dropIfExists('employes');
    }
}
