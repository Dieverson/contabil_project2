<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_grupos', function (Blueprint $table) {
            $table->id('idsub_grupos');
            $table->string('numero_da_conta');
            $table->unsignedBigInteger('grupos_idgrupos');
            $table->unsignedBigInteger('natureza_idnatureza');
            $table->string('nome_da_conta');
            $table->foreign('grupos_idgrupos')->references('idgrupos')->on('grupos');

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
        Schema::dropIfExists('sub_grupos');
    }
}
