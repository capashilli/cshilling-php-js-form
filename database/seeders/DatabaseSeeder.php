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
                ],
                [
                    'name' => 'Dwarf',
                    'rarity' => 'c'
                ],
                [
                    'name' => 'Gnome',
                    'rarity' => 'c'
                ],
                [
                    'name' => 'Goblin',
                    'rarity' => 'c'
                ],
                [
                    'name' => 'Halfling',
                    'rarity' => 'c'
                ],
                [
                    'name' => 'Skeleton',
                    'rarity' => 'r'
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
                ],
                [              
                    'name' => 'Barbarian',
                    'rarity' => 'c'
                ],
                [              
                    'name' => 'Bard',
                    'rarity' => 'c'
                ],
                [              
                    'name' => 'Druid',
                    'rarity' => 'c'
                ],
                [              
                    'name' => 'Rogue',
                    'rarity' => 'c'
                ],
                [              
                    'name' => 'Ranger',
                    'rarity' => 'c'
                ],
                [              
                    'name' => 'Wizard',
                    'rarity' => 'c'
                ],
                [
                    'name' => 'Gunslinger',
                    'rarity' => 'u'
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
                    'name' => 'Acrobat',
                    'rarity' => 'c'
                ],
                [
                    'name' => 'Barkeep',
                    'rarity' => 'c'
                ],
                [
                    'name' => 'Criminal',
                    'rarity' => 'c'
                ],
                [
                    'name' => 'Farmhand',
                    'rarity' => 'c'
                ],
                [
                    'name' => 'Guard',
                    'rarity' => 'c'
                ],
                [
                    'name' => 'Merchant',
                    'rarity' => 'c'
                ],
                [
                    'name' => 'Noble',
                    'rarity' => 'c'
                ],
                [
                    'name' => 'Prisoner',
                    'rarity' => 'c'
                ],
                [
                    'name' => 'Warrior',
                    'rarity' => 'c'
                ],
                [
                    'name' => 'Haunted Vision',
                    'rarity' => 'r'
                ],
            ]
        );
    }
}
