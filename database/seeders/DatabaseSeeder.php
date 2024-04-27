<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Maak een voorbeeldgebruiker aan
        User::factory()->create([
            'name' => 'Test Gebruiker',
            'email' => 'test@example.com',
            'password' => bcrypt('password'), // Hier vul je het wachtwoord in voor de testgebruiker
        ]);
    }
}
