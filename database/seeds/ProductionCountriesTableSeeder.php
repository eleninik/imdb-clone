<?php

use Illuminate\Database\Seeder;
use App\ProductionCountry;

class ProductionCountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('production_countries')->delete();
        
        ProductionCountry::create(array(
            'country_name' => 'UK',
            'continent' => 'Europe'
        ));

        ProductionCountry::create(array(
            'country_name' => 'Japan',
            'continent' => 'Asia'
        ));

        ProductionCountry::create(array(
            'country_name' => 'USA',
            'continent' => 'North America'
        ));

        ProductionCountry::create(array(
            'country_name' => 'Australia',
            'continent' => 'Australia'
        ));

        ProductionCountry::create(array(
            'country_name' => 'Nigeria',
            'continent' => 'Africa'
        ));

        ProductionCountry::create(array(
            'country_name' => 'France',
            'continent' => 'Europe'
        ));
    }
}


