<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameCompaniesTable extends Migration
{
    /**
     * Exécuter les migrations.
     *
     * @return void
     */
    public function up()
    {
        // TÂCHE : écrivez la migration pour renommer la table "company" en "companies"
        // Indice : utilisez Schema::rename() (voir https://laravel.com/docs/migrations#renaming-and-dropping-tables)
        // Votre code ici
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
