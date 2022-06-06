<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
    'name'=>'alaeldin Musa',
    'email'=>'alaeldinmusa91@gmail.com',
    'password'=>bcrypt('1234'),

        ]);
    }
}
