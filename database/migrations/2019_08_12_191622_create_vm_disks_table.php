<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVmDisksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vm_disks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('vm_request_id');
            $table->foreign('vm_request_id')->references('id')->on('vm_requests');
            $table->integer('space');
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
        Schema::dropIfExists('vm_disks');
    }
}
