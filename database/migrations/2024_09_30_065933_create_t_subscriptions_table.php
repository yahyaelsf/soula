<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_subscriptions', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->string('gateway');
            $table->unsignedBigInteger('fk_i_user_id')->nullable();
            $table->unsignedBigInteger('fk_i_cource_id')->nullable();
            $table->foreign('fk_i_cource_id')->references('pk_i_id')->on('t_cources')->cascadeOnDelete();
            $table->unsignedBigInteger('fk_i_vedio_id')->nullable();
            $table->foreign('fk_i_vedio_id')->references('pk_i_id')->on('t_vedios')->cascadeOnDelete();
            $table->enum('status',['peending','success','failed']);
            $table->float('amount');
            $table->boolean('b_enabled')->default(1);
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
        Schema::dropIfExists('t_subscriptions');
    }
}
