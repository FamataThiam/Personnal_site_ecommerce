<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Utilisateur extends Authenticatable
{
    use Notifiable, HasFactory;
    protected $table = 'utilisateurs';

    protected $fillable=[
        'nom',
        'prenom',
        'telephone',
        'email',
        'password',
        'photo_profil',
        'username',
        'date_naissance',
        'is_verified',
        'last_login',
        'nombre_connections',
        'statut_compte',
        'description_biographique',
        'couleur_dashboard',
        'pays',
        'ville',
        'adresse',
        'role_id'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];
    

    protected $casts = [
        'date_naissance'     => 'date',
        'last_login'         => 'datetime',
        'is_verified'        => 'boolean',
        'nombre_connections' => 'integer',
        'email_verified_at'  => 'datetime', 
        'password'           => 'hashed',  
    ];
    
    public function role()
    {
        return $this->belongsTo(Role::class);
    }


   public function hasRole($libelle)
    {
        return $this->role->libelle === $libelle;
    }

    public function publications()
    {
        return $this->hasMany(Publication::class);
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

   
}
