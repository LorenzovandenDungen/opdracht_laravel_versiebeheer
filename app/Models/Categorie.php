<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    /**
     * De tabel die wordt gebruikt door het model.
     *
     * @var string
     */
    protected $table = 'categorie'; // Verander 'categorie' naar de naam van jouw tabel in de database

    /**
     * De attributen die toegewezen kunnen worden.
     *
     * @var array
     */
    protected $fillable = ['naam'];

    /**
     * Relatie: Bieren in deze categorie.
     */
    public function bieren()
    {
        return $this->hasMany(Bier::class);
    }
}
