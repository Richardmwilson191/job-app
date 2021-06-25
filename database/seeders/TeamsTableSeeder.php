<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = [
            [
                'id' => 1,
                'user_id' => 1,
                'name' => 'Admin\'s Team',
                'personal_team' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'name' => 'User\'s Team',
                'personal_team' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Team::insert($teams);
    }
}
