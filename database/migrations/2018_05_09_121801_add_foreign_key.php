<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('proposals', function (Blueprint $table) {
          $table->integer('job_id')->unsigned()->nullable();
          $table->foreign('job_id')->references('id')->on('jobs');
          $table->integer('user_id')->unsigned()->nullable();
          $table->foreign('user_id')->references('id')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('job_id');
        $table->dropColumn('user_id');
    }
}
