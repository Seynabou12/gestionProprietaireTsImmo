<?php

use App\Models\Proprietaire;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('superficie');
            $table->string('photo');
            $table->boolean('disponibilites');
            $table->string('description');
            $table->timestamps();

            $table->foreignIdFor(Proprietaire::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proprietes');
    }
};
