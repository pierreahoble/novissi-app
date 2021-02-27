<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dons', function (Blueprint $table) {
            $table->id();
            $table->string('token')->nullable();
            $table->string("operateur", 50)->nullable();
            $table->string("phone_number", 50)->nullable();
            $table->string("montant", 50)->nullable();
            $table->string("description", 255)->nullable();
            $table->string("identifier", 50)->nullable();
            $table->integer("etat")->default(1); //1:envoyer;2:verifier;3:terminer
            $table->integer("nombre_de_verification")->default(0);
            $table->integer("status_operateur")->default();
            $table->date("derniere_verification")->nullable();
            $table->string("mode", 20)->nullable();
            $table->string('tx_reference')->nullable();
            $table->string('payment_reference')->nullable();
            $table->string('montant_payer')->nullable();
            $table->unsignedBigInteger('collecte_id');
            $table->unsignedBigInteger('donnateur_id');
            $table->foreign('collecte_id')->references('id')->on('collectes'); 
            $table->foreign('donnateur_id')->references('id')->on('donnateurs'); 
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
        Schema::dropIfExists('dons');
    }
}
