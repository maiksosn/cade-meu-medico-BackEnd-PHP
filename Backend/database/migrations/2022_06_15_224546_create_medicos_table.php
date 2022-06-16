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
        Schema::create('medicos', function (Blueprint $table) {
            $table->id();
            $table->string('CRM');
            $table->string('nome');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('email');
            $table->boolean('atendeporconvenio')->default(true);
            $table->boolean('temclinica')->default(true);
            $table->string('websiteblog');
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
        Schema::dropIfExists('medicos');
    }
};
