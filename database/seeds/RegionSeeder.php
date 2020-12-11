<?php

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $region = Region::create([
            'nomRegion' => 'Niamey'
        ]);

        $region = Region::create([
            'nomRegion' => 'Dosso'
        ]);

        $region = Region::create([
            'nomRegion' => 'Tillaberi'
        ]);

        $region = Region::create([
            'nomRegion' => 'Tahoua'
        ]);

        $region = Region::create([
            'nomRegion' => 'Zinder'
        ]);

        $region = Region::create([
            'nomRegion' => 'Maradi'
        ]);

        $region = Region::create([
            'nomRegion' => 'Diffa'
        ]);

        $region = Region::create([
            'nomRegion' => 'Agadez'
        ]);
    }
}
