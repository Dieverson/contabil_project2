<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contas', function (Blueprint $table) {
            $table->id('idcontas');
            $table->string('nome_da_conta');
            $table->string('numero_da_conta');
            $table->unsignedBigInteger('sub_grupos_idsub_grupos');
            $table->unsignedBigInteger('natureza_idnatureza');
            $table->foreign('sub_grupos_idsub_grupos')->references('idsub_grupos')->on('sub_grupos');
            $table->foreign('natureza_idnatureza')->references('idnatureza')->on('naturezas');
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
        Schema::dropIfExists('contas');
    }
}
