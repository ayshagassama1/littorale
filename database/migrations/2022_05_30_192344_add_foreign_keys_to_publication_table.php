<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPublicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('publication', function (Blueprint $table) {
            $table->foreign(['Utilisateur_id'], 'fk_Publication_Utilisateur')->references(['id'])->on('utilisateur')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('publication', function (Blueprint $table) {
            $table->dropForeign('fk_Publication_Utilisateur');
        });
    }
}
