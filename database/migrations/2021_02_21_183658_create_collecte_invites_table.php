<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollecteInvitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collecte_invites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('collecte_id');
            $table->foreign('collecte_id')->references('id')->on('collectes');
            $table->unsignedBigInteger('invite_id');
            $table->foreign('invite_id')->references('id')->on('invites');
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
        Schema::dropIfExists('collecte_invites');
    }
}
