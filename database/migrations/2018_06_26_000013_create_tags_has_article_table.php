<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsHasArticleTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'tags_has_article';

    /**
     * Run the migrations.
     * @table tags_has_article
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('tags_id');
            $table->unsignedInteger('article_id');

            $table->index(["tags_id"], 'fk_tags_has_article_tags1_idx');

            $table->index(["article_id"], 'fk_tags_has_article_article1_idx');


            $table->foreign('tags_id', 'fk_tags_has_article_tags1_idx')
                ->references('id')->on('tags')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('article_id', 'fk_tags_has_article_article1_idx')
                ->references('id')->on('articles')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
