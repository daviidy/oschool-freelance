<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldJobtitleAndStatusToProposals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('proposals', function (Blueprint $table) {
          $table->string('job_title')->default('dave');
          $table->string('status')->default('En traitement');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      $table->dropColumn('job-title');
      $table->dropColumn('status');
    }
}
