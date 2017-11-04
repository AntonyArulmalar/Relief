<?php

//use Illuminate\Support\Facades\Schema;
use  Jenssegers\Mongodb\Schema\Blueprint ;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesCollection extends Migration
{
    protected $connection = 'mongodb';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::connection($this->connection)
        ->table('resources', function (Blueprint $collection) 
        {
//$table->increments('id');
            $collection->string('itemname');
            $collection->string('itemtype');
            $collection->longText('itemdescription');
            $collection->string('stock');
            $collection->string('level');
            $collection->integer('quantity');
            $collection->integer('value');
            
            $collection->string('collectby');
            $collection->string('deliverby');
          
            $collection->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::connection($this->connection)
        ->table('resources', function (Blueprint $collection) 
        {
            $collection->drop();
        });
    }
}
