<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperFormatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper_formats', function (Blueprint $table) {
            $table->id();
            $table->string('str_pf_name');
            $table->string('str_pf_desc');
            $table->integer('int_pf_width');
            $table->integer('int_pf_height');
            $table->integer('int_sort_order');
            $table->boolean('bool_pf_enabled');
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
        Schema::dropIfExists('paper_formats');
    }
}
