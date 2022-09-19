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
        Schema::create('fornecedors', function (Blueprint $table) {
            $table->id('id_fornecedor');
            $table->string('nome_fornecedor');
            $table->string('cpf/cnpj_fornecedor');
            $table->string('fone_fornecedor');
            $table->string('email_fornecedor');
            $table->string('cep_fornecedor');
            $table->string('Estado_fornecedor');
            $table->string('Cidade_fornecedor');
            $table->string('Bairro_fornecedor');
            $table->string('rua_fornecedor');
            $table->integer('numero_fornecedor');
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
        Schema::dropIfExists('fornecedor');
    }
};
