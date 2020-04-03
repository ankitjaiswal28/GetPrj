<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_user_tbl', function (Blueprint $table) {
            $table->bigIncrements('userId');
            $table->string('username', 999);
            $table->string('emailId', 999);
            $table->string('passwords', 999);
            $table->string('master_roleId');
            $table->string('Flag');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE mst_user_tbl ADD user_image  LONGBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_user_tbl');
    }
}
