<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function (Blueprint $table) {
          $table->string('first_name')->default('dave');
          $table->string('number_tel')->default('dave');
          $table->string('file_cv')->default('image.jpeg');
          $table->string('job_title')->default('dave');
          $table->string('description')->default('dave');
          $table->string('skills')->default('dave');
          $table->string('useful_link')->default('dave');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('first_name');
        $table->dropColumn('number_tel');
        $table->dropColumn('file_cv');
        $table->dropColumn('job_title');
        $table->dropColumn('description');
        $table->dropColumn('skills');
        $table->dropColumn('useful_link');
    }
}
