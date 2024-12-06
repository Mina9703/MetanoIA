<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test2@example.com'
        ]);

        
        $this->call(PatientSeeder::class); 
    }
}

