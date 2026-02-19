<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsTable extends Migration
{
    /**
     * Exécuter les migrations.
     *
     * @return void
     */
    public function up()
    {
        // TÂCHE : modifiez cette migration pour que le champ country_id autorise les valeurs NULL
        // Indice : utilisez ->nullable() sur la clé étrangère (voir https://laravel.com/docs/migrations#foreign-key-constraints)
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained();
            $table->string('ip_address');
            $table->timestamps();
        });
    }

    /**
     * Annuler les migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitors');
    }
}
