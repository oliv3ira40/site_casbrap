<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationUpdateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_update', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->string('zip_code', 8)->nullable();  // cep
            $table->string('country')->nullable();    // pais
            $table->string('uf')->nullable();       // uf
            $table->string('city')->nullable();       // cidade
            $table->string('district', 200)->nullable();   // bairro
            $table->string('street_type')->nullable();// tipo_logradouro
            $table->string('public_place', 40)->nullable();// logradouro
            $table->string('number')->nullable();     // numero
            $table->string('complement', 20)->nullable(); // complemento
            
            $table->string('phone', 20)->nullable(); // fone
            $table->string('cell_phone', 20)->nullable(); // celular
            $table->string('email', 20)->nullable(); // email

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
        Schema::dropIfExists('registration_update');
    }
}
