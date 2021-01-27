<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('vote');
			$table->string('model_name',150);
			$table->bigInteger('post_id');
			$table->dateTime('submitted_at',$precision = 0);
			$table->dateTime('updated_at',$precision = 0);
			$table->string('submitted_by_name',200)->nullable();
			$table->string('submitted_by_email')->nullable();
			$table->ipAddress('submitted_by_ip')->nullable();
			$table->integer('deleted')->default(0);
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
        Schema::dropIfExists('votes');
    }
}
