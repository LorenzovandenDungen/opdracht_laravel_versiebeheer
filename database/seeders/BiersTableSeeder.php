<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bier;

class BiersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Voorbeeld van handmatig gegevens invoeren
        Bier::create([
            'naam' => 'Heineken',
            'valt_onder_id' => null,
            'categorie_id' => 1,
        ]);

        // Voorbeeld van gebruik van factory helper
        Bier::factory()->count(5)->create(); // Dit genereert 5 willekeurige bieren
    }
}
