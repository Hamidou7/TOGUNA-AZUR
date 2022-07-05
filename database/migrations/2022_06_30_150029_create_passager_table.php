<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passagers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('num_piece');
            $table->string('nom');
            $table->string('prenom');
            $table->text('sexe');
            $table->string('place');
            $table->foreignId('listes_id')->constrained("listes");
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("passagers", function (Blueprint $table) {
            $table->dropConstrainedForeignId("listes_id");
        });
        Schema::dropIfExists('passagers');
    }
}
