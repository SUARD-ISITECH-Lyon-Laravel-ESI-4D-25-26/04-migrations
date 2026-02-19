<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameNameInCompaniesTable extends Migration
{
    /**
     * Exécuter les migrations.
     *
     * @return void
     */
    public function up()
    {
        // TÂCHE : écrivez la migration pour renommer la colonne "title" en "name"
        // Indice : utilisez $table->renameColumn() (voir https://laravel.com/docs/migrations#renaming-columns)
        Schema::table('companies', function (Blueprint $table) {
            // Votre code ici
        });
    }

    /**
     * Annuler les migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            //
        });
    }
}
