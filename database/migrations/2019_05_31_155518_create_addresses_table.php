<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number'); /* Lecture 9 */
            $table->string('street'); /* Lecture 9 */
            $table->integer('hotel_id')->unsigned(); /* Lecture 9 */
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade'); /* Lecture 9 */

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
        Schema::dropIfExists('addresses');
    }
}
