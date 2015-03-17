<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Create or remove a ‘parliaments’ table from the database.
 *
 * @author Michaël Lecerf <michael@estsurinter.net>
 */
class CreateParliamentsTable extends Migration
{
    /**
     * Create the table.
     */
    public function up()
    {
        Schema::create('parliaments', function (Blueprint $table) {

            // Primary key.
            // This is the single letter code of the parliament.
            $table->char('code', 1)->primary('code');

            // Main data.
            // Name of the assembly, in multiple languages.
            $table->string('name_en');
            $table->string('name_fr');
            $table->string('name_nl');
        });
    }

    /**
     * Destroy the table.
     */
    public function down()
    {
        Schema::drop('parliaments');
    }
}
