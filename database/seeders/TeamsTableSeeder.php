<?php

namespace Database\Seeders;

use App\Models\Teams;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams= [
            ['id'=>1 , 'name'=>'bd', 'player_id'=>'1'],
            ['id'=>1 , 'name'=>'bd', 'player_id'=>'2'],
            ['id'=>1 , 'name'=>'bd', 'player_id'=>'3'],

            ['id'=>2 , 'name'=>'ind', 'player_id'=>'4'],
            ['id'=>2 , 'name'=>'ind', 'player_id'=>'5'],
            ['id'=>2 , 'name'=>'ind', 'player_id'=>'6'],

            ['id'=>3 , 'name'=>'pak', 'player_id'=>'7' ],
            ['id'=>3 , 'name'=>'pak', 'player_id'=>'8' ],
            ['id'=>3 , 'name'=>'pak', 'player_id'=>'9' ],
        ];
        Teams::insert($teams);
    }
}
