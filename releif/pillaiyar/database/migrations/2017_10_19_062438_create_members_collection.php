<?php

//use Illuminate\Support\Facades\Schema;
use  Jenssegers\Mongodb\Schema\Blueprint ;
use Illuminate\Database\Migrations\Migration;

class CreateMembersCollection extends Migration
{
    protected $connection = 'mongodb';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::connection($this->connection)
        ->table('members', function (Blueprint $collection) 
        {
           // $collection->index('name');
           // $table->increments('id');
            $collection->string('membername');
            $collection->string('membercontact');
            $collection->unique('memberemail');
            $collection->string('skills');
            $collection->string('location');
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
        ->table('members', function (Blueprint $collection) 
        {
            $collection->drop();
        });
    }
}
