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

            $table->text('fuck');
            $table->text('fuck_rendered');

            $table->string('token', 100)->nullable();
            $table->boolean('confirmed')->default('false');

            $table->timestamp('token_updated')->nullable();
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
