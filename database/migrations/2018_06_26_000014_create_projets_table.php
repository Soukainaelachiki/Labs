<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'projets';

    /**
     * Run the migrations.
     * @table projets
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('titre', 45);
            $table->string('image', 45)->nullable();
            $table->text('contenu');
            $table->string('url', 45);
            $table->timestamps();
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('client_testimonius_id');

            // $table->index(["client_id", "client_testimonius_id"], 'fk_projet_client1_idx');


            // $table->foreign('client_id', 'fk_projet_client1_idx')
            //     ->references('id')->on('client')
            //     ->onDelete('no action')
            //     ->onUpdate('no action');
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
