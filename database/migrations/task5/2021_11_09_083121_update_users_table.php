<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Exécuter les migrations.
     *
     * @return void
     */
    public function up()
    {
        // TÂCHE : ajoutez une condition dans ce fichier pour ne PAS ajouter la colonne si elle existe déjà
        // Indice : utilisez Schema::hasColumn() (voir https://laravel.com/docs/migrations#checking-for-table-column-existence)
        Schema::table('users', function (Blueprint $table) {
            $table->string('name');
        });
    }

    /**
     * Annuler les migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
