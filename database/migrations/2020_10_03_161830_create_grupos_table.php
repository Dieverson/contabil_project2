<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id('idgrupos');
            $table->string('numero_da_conta');
            $table->unsignedBigInteger('natureza_idnatureza');
            $table->unsignedBigInteger('id_plano_de_contas');
            $table->string('nome_da_conta');
            $table->timestamps();
            $table->foreign('natureza_idnatureza')->references('idnatureza')->on('naturezas');
            $table->foreign('id_plano_de_contas')->references('id_plano_de_conta')->on('plano_de_contas');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}
