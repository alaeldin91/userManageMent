<?php

namespace Database\Seeders;

use App\Models\Resturant;
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
       /** */ $user = User::create([
            'name' => 'alaeldin Musa',
            'email' => 'alaeldinmusa91@gmail.com',
            'password' => bcrypt('1234'),

        ]);
        Resturant::create([
            'name' => 'HighWay Star',
            'location' => 'Khartoum Sudan',
            'owner_id' =>$user->id
        ]);
        Resturant::create([
            'name' => 'ananna Star',
            'location' => 'Omdurman Sudan',
            'owner_id' =>$user->id
        ]);
        Resturant::create([
            'name' => 'ld;d; Star',
            'location' => 'Omdurman Sudan',
            'owner_id' =>$user->id
        ]);
      
    }
}
