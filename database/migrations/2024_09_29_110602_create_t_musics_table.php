<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTMusicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_musics', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->string('s_title')->nullable();
            $table->unsignedBigInteger('fk_i_cource_id')->nullable();
            $table->foreign('fk_i_cource_id')->references('pk_i_id')->on('t_cources')->cascadeOnDelete();
            $table->unsignedBigInteger('fk_i_vedio_id')->nullable();
            $table->foreign('fk_i_vedio_id')->references('pk_i_id')->on('t_vedios')->cascadeOnDelete();
            $table->string('s_music');
            $table->boolean('b_enabled')->default(1);
            $table->timestamp('dt_created_date')->nullable();
            $table->timestamp('dt_modified_date')->nullable();
            $table->timestamp('dt_deleted_date')->nullable();
        });
        Schema::create('t_music_translations', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->string('s_locale', 2);
            $table->string('s_title');
            $table->unsignedBigInteger('fk_i_music_id');
            $table->foreign('fk_i_music_id')->references('pk_i_id')->on('t_musics');
            $table->timestamp('dt_created_date')->nullable();
            $table->timestamp('dt_modified_date')->nullable();
            $table->timestamp('dt_deleted_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_musics');
        Schema::dropIfExists('t_music_translations');
    }
}
