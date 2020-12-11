<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create([
            'name' => 'Admin'
        ]);

        $role2 = Role::create([
            'name' => 'ChefDT'
        ]);

        $role3 = Role::create([
            'name' => 'Field'
        ]);
    }
}
