<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->smallIncrements('jawaban_ID');
            $table->foreignId('pertanyaan_ID');
            $table->foreignId('profil_ID');
            $table->string('isi');
            $table->timestamps();
          
            $table->integer('sum_like');
            $table->integer('sum_dislike');
            $table->integer('sum_vote');
            $table->integer('verified');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban');
    }
}
