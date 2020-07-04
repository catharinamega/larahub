<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->smallIncrements('pertanyaan_ID');
            $table->string('judul');
            $table->foreignId('profil_ID');
            $table->string('isi');
            $table->timestamps();
            
            $table->integer('sum_like');
            $table->integer('sum_dislike');
            $table->integer('sum_vote');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertanyaan');
    }
}
