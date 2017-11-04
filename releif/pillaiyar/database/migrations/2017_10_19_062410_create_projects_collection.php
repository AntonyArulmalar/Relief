<?php

//use Illuminate\Support\Facades\Schema;
use  Jenssegers\Mongodb\Schema\Blueprint ;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsCollection extends Migration
{
    protected $connection = 'mongodb';
    /* * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection($this->connection)
        ->table('projects', function (Blueprint $collection) 
        {
           // $collection->index('id');
            $collection->string('projectname');
            $collection->string('projecttype');
            $collection->string('other_project_type');
            $collection->longText('description');
            $collection->string('location');
            $collection->string('leadername');
            $collection->unique('leaderemail');
            $collection->string('leadercontact');
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
        ->table('projects', function (Blueprint $collection) 
        {
            $collection->drop();
        });
    }
}
