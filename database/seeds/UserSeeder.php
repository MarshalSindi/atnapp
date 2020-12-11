<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name'=> 'Sindi',
            'email' => 'isindi@moov.ne',
            'password' => Hash::make('admin07')
        ]);
        $user1->assignRole('Admin');

        $user2 = User::create([
            'name'=> 'Bechir',
            'email' => 'obechir@moov.ne',
            'password' => Hash::make('94940042')
        ]);
        $user2->assignRole('chefDT');
        $user3 = User::create([
            'name'=> 'Amini',
            'email' => 'iamini@moov.ne',
            'password' => Hash::make('949490128')
        ]);
        $user3->assignRole('chefDT');
        $user4 = User::create([
            'name'=> 'Wassiri',
            'email' => 'tibrahim@moov.ne',
            'password' => Hash::make('94940046')
        ]);
        $user4->assignRole('chefDT');
    
    }
}
