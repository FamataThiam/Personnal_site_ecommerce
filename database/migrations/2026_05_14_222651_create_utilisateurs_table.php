<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            // C'est la qu'on va ajouter les attributs de la table utilisateurs
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('photo_profil')->nullable();
            $table->string('username')->unique();
            $table->date('date_naissance');
            $table->boolean('is_verified')->default(false);
            $table->dateTime('last_login')->nullable();
            $table->integer('nombre_connections')->default(0);
            $table->enum('statut_compte', ['actif', 'inactif', 'banni'])->default('actif');
            $table->text('description_biographique')->nullable();
            $table->string('couleur_dashboard')->nullable();
            $table->string('pays')->nullable();
            $table->string('ville')->nullable();
            $table->string('adresse')->nullable();
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');
 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
