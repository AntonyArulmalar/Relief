<?php

//use Illuminate\Support\Facades\Schema;
use  Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
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
        ->table('password_resets', function (Blueprint $collection) 
        {
            $collection->string('email')->index();
            $collection->string('token')->index();
            $collection->timestamp('created_at')->nullable();
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
        ->table('password_resets', function (Blueprint $collection) 
        {
            $collection->drop();
        });
    }
}
