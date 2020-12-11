<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission1 = Permission::create([
            'name' => 'ownSite'
        ]);

        $permission2 = Permission::create([
            'name' => 'crudRelever'
        ]);

        $permission3 = Permission::create([
            'name' => 'ownSite'
        ]);
    }
}
