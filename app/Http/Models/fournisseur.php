<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fournisseur extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'telephone', 'email', 'ville', 'adresse'];
    public function commandeAchat(){
        return $this->hasMany(commandeAchat::class);
    }}
