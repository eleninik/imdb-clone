<?php

use Illuminate\Database\Seeder;
use App\Featured;

class FeaturedTableSeeder extends Seeder
{
      /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('featured')->delete();

        Featured::create(array(
            'name' => 'Coming soon'
        ));

        Featured::create(array(
            'name' => 'Popular'
        ));

        Featured::create(array(
            'name' => 'Now playing'
        ));
    }

      
}