<?php

//use Illuminate\Support\Facades\Schema;
use  Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
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
        ->table('users', function (Blueprint $collection) 
        {
            //$collection->index('id');
            $collection->string('name');
            $collection->string('email')->unique();
            $collection->password('password');
            $collection->rememberToken();
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
        ->table('users', function (Blueprint $collection) 
        {
            $collection->drop();
        });
    }
}
