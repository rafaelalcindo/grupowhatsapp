<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoWhatsappsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_whatsapps', function (Blueprint $table) {
            $table->id();

            $table->string('empresa', 120);

            $table->integer('quantidade_click');

            $table->integer('quantidade_grupo');

            $table->text('script')->nullable();

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
        Schema::dropIfExists('grupo_whatsapps');
    }
}
