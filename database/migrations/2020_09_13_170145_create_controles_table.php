<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controles', function (Blueprint $table) {
            $table->id();
            $table->integer('site_id');
            $table->float('conso');
            $table->integer('duree_conso_jour');
            $table->integer('duree_fonctionnement_ge');
            $table->float('conso_moyenne');
            $table->integer('duree_fonctionnement_ge_jour');
            $table->float('conso_site_jour');
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
        Schema::dropIfExists('controles');
    }
}
