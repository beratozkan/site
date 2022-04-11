<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_comment', function (Blueprint $table) {
            
            $table->bigIncrements('comment_id');
            $table->integer("post_id");
            $table->string("comment_content");
            $table->string("user");
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
        Schema::create('user_comment', function (Blueprint $table) {
            Schema::dropIfExists('user_comment');
        });
    }

};