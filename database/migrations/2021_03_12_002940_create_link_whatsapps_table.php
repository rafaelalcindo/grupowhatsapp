<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkWhatsappsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_whatsapps', function (Blueprint $table) {
            $table->id();

            $table->string('link_whatapp', 120)->nullable();

            $table->integer('clicks')->nullable();

            $table->unsignedBigInteger('grupo_whatsapp_id');
            $table->foreign('grupo_whatsapp_id')->references('id')->on('grupo_whatsapps')->onDelete('cascade');

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
        Schema::dropIfExists('link_whatsapps');
    }
}
