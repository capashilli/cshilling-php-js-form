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
    public function run() {
        /**
         * Options with 'c' (common) rarity are always an option for characters, and can be shown in selectable lists.
         * 'u' or 'r' (uncommon or rare) would be options that require manual input.
         *  */ 

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
