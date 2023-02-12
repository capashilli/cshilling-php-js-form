<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /**
         * 
         */
        \App\Models\Ancestry::factory()
            ->count(2)
            ->sequence(
                [
                    'name' => 'Human',
                    'rarity' => 'c'
                ],
                [
                    'name' => 'Elf',
                    'rarity' => 'c'
                ]
            )
            ->create();

        \App\Models\CharacterClass::factory()
            ->count(2)
            ->sequence(
                [              
                    'name' => 'Fighter',
                    'rarity' => 'c'
                ],
                [
                    'name' => 'Cleric',
                    'rarity' => 'c'
                ]
            )
            ->create();

        \App\Models\Background::factory()
            ->count(2)
            ->sequence(
                [
                    'name' => 'Acolyte',
                    'rarity' => 'c'
                ],
                [
                    'name' => 'Criminal',
                    'rarity' => 'c'
                ]
            )
            ->create();
    }
}
