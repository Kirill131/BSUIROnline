<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Maintexts extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('maintexts', function($f){
		$f->increments('id');
		$f->string('name', 32);
		$f->text('body');
		$f->string('url', 32);
		$f->enum('showhide',array('show','hide'))->default('show');
		$f->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::drop('maintexts');
    }
}
