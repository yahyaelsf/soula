<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBrandTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_brand_translations', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->string('s_locale', 2);
            $table->string('s_title');
            $table->text('s_description')->nullable();
            $table->unsignedBigInteger('fk_i_brand_id');
            $table->foreign('fk_i_brand_id')->references('pk_i_id')->on('t_brands');
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
        Schema::dropIfExists('t_brand_translations');
    }
}
