<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLinksFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function (Blueprint $table) { 
          $table->string('linkedin')->default('dave');
          $table->string('facebook')->default('dave');
          $table->string('lien_cv')->default('dave');


      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('linkedin');
        $table->dropColumn('facebook');
        $table->dropColumn('lien_cv');
    }
}
