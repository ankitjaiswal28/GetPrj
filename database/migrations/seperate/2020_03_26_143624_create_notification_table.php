<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_tbl_notification', function (Blueprint $table) {
            $table->bigIncrements('notificationid');
            $table->string('Status', 999);
            $table->string('Flag', 999);
            $table->bigInteger('created_by');
            $table->bigInteger('sent_to');
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
        Schema::dropIfExists('mst_tbl_notification');
    }
}
