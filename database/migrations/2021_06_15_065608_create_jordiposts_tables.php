<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJordipostsTables extends Migration
{
    public function up()
    {
        Schema::create('jordiposts', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            $table->integer('position')->unsigned()->nullable();
            
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('jordipost_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'jordipost');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('jordipost_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'jordipost');
        });

        Schema::create('jordipost_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'jordipost');
        });
    }

    public function down()
    {
        Schema::dropIfExists('jordipost_revisions');
        Schema::dropIfExists('jordipost_translations');
        Schema::dropIfExists('jordipost_slugs');
        Schema::dropIfExists('jordiposts');
    }
}
