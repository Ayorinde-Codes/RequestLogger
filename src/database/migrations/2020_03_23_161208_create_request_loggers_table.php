<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestLoggersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_loggers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url');
            $table->string('method');
            $table->string('ip');
            $table->string('agent')->nullable();
            $table->string('header_token')->nullable();
            $table->string('user_id')->nullable();
            $table->text('payload_request')->nullable();
            $table->text('payload_response')->nullable();
            $table->text('duration')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('request_loggers');
    }
}
