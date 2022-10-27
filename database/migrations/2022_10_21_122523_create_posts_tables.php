<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTables extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            
            createDefaultTableFields($table);
            $table->string('title',200)->nullable();
            $table->text('content')->nullable();
            $table->string('excerpt',200)->nullable();
            $table->timestamp('publish_start_date')->nullable();
            
        });



        Schema::create('post_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'post');
        });

        
    }

    public function down()
    {
        
        Schema::dropIfExists('post_slugs');
        Schema::dropIfExists('posts');
    }
}
