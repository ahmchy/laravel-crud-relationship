<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $players= [
            ['id'=>1 , 'name'=>'kowcher', 'city'=>'dhk', 'gender'=>'male'],
            ['id'=>2 , 'name'=>'Farid', 'city'=>'ctg', 'gender'=>'female'],
            ['id'=>3 , 'name'=>'Rahat', 'city'=>'syt', 'gender'=>'male'],
            ['id'=>4 , 'name'=>'karim', 'city'=>'dhk', 'gender'=>'male'],
            ['id'=>5 , 'name'=>'sajjad', 'city'=>'ctg', 'gender'=>'female'],
            ['id'=>6 , 'name'=>'moin', 'city'=>'syt', 'gender'=>'male'],
            ['id'=>7 , 'name'=>'nawaf', 'city'=>'dhk', 'gender'=>'male'],
            ['id'=>8 , 'name'=>'riad', 'city'=>'ctg', 'gender'=>'female'],
            ['id'=>9 , 'name'=>'rizwan', 'city'=>'syt', 'gender'=>'male'],
        ];
        Player::insert($players);
    }
}
