<?php

use Illuminate\Database\Seeder;
use App\Maintexts;
class MaintextsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Maintexts::insert([
	     'name'=>'Welcome',
         'body'=>'Description',
         'url'=>'index'		 
	]);
    }
}
