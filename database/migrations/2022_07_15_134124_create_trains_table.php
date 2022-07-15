<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->string("azienza");
            $table->string("stazione di partenza");
            $table->string("stazione di arrivo");
            $table->date("orario di partenza");
            $table->date("orario di arrivo");
            $table->string("codice treno");
            $table->integer("numero carrozze");
            $table->string("in orario");
            $table->string("cancellato");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
