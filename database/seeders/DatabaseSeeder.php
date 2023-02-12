<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

         DB::table('ancestries')->insert(
            [
                [
                    'name' => 'Human',
                    'rarity' => 'c'
                ],
                [
                    'name' => 'Elf',
                    'rarity' => 'c'
                ]
            ]
        );
        
        DB::table('character_classes')->insert(
            [
                [              
                    'name' => 'Fighter',
                    'rarity' => 'c'
                ],
                [
                    'name' => 'Cleric',
                    'rarity' => 'c'
                ]
            ]
        );

        DB::table('backgrounds')->insert(
            [
                [
                    'name' => 'Acolyte',
                    'rarity' => 'c'
                ],
                [
                    'name' => 'Criminal',
                    'rarity' => 'c'
                ]
            ]
        );
    }
}
