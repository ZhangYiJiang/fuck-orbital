<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fucks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email'); 
            $table->string('name')->nullable();
            $table->text('message');
            $table->string('delete_token', 100);
            $table->timestamp('token_updated');
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
        Schema::drop('fucks');
    }
}
