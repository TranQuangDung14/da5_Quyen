<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string("name",100);
            $table->date("date_of_birth");
            $table->string("sex",5);
            $table->string("id_card",50)->nullable();;
            $table->integer("number_phone")->unsigned()->nullable();
            $table->string("email",100)->nullable();
            $table->string("adress",100)->nullable();
            $table->string("possion",100)->nullable();
            $table->string("department",100)->nullable();
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
        Schema::dropIfExists('staff');
    }
}
