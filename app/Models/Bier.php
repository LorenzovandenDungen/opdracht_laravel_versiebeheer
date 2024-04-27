<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bier extends Model
{
    use HasFactory;

    /**
     * De tabel die wordt gebruikt door het model.
     *
     * @var string
     */
    protected $table = 'bier'; // Verander 'bier' naar de naam van jouw tabel in de database

    /**
     * De attributen die toegewezen kunnen worden.
     *
     * @var array
     */
    protected $fillable = ['naam', 'valt_onder_id', 'categorie_id'];

    /**
     * Relatie: Onderliggende merken.
     */
    public function submerken()
    {
        return $this->hasMany(Bier::class, 'valt_onder_id');
    }

    /**
     * Relatie: Categorie van het bier.
     */
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
