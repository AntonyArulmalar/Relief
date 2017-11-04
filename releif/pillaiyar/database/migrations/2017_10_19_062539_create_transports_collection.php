<?php

//use Illuminate\Support\Facades\Schema;
use  Jenssegers\Mongodb\Schema\Blueprint ;
use Illuminate\Database\Migrations\Migration;

class CreateTransportsCollection extends Migration
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
       // $table->increments('id');
            $collection->string('ownername');
            $collection->string('ownercontact');
            $collection->string('center');
            $collection->string('transporttype');
            $collection->string('availability');
            $collection->string('licenceno');
            $collection->string('vehicleno');
            $collection->string('vehiclelocation');
            $collection->date('date');
            $collection->string('capacity');
            
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
        ->table('transports', function (Blueprint $collection) 
        {
            $collection->drop();
        });
    }
}
