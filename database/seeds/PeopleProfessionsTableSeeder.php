<?php

use Illuminate\Database\Seeder;
use App\PeopleProfession;

class PeopleProfessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people_professions')->delete();

        PeopleProfession::create(array(
            'people_id' => 1,
            'cast_id' => 1,
            'cast_type' => 'movie',
            'profession_id' => 1, 
            'role' => 'Tonto'
        ));
        PeopleProfession::create(array(
            'people_id' => 2,
            'cast_id' => 1,
            'cast_type' => 'movie',
            'profession_id' => 1, 
            'role' => 'John Reid (Lone Ranger)'
        ));
        PeopleProfession::create(array(
            'people_id' => 3,
            'cast_id' => 1,
            'cast_type' => 'movie',
            'profession_id' => 1, 
            'role' => 'Butch Cavendish'
        ));
        PeopleProfession::create(array(
            'people_id' => 4,
            'cast_id' => 1,
            'cast_type' => 'movie',
            'profession_id' => 1, 
            'role' => 'Cole'
        ));
        PeopleProfession::create(array(
            'people_id' => 5,
            'cast_id' => 1,
            'cast_type' => 'movie',
            'profession_id' => 1, 
            'role' => 'Rebecca Reid'
        ));
        PeopleProfession::create(array(
            'people_id' => 6,
            'cast_id' => 1,
            'cast_type' => 'movie',
            'profession_id' => 2
        ));
        PeopleProfession::create(array(
            'people_id' => 7,
            'cast_id' => 1,
            'cast_type' => 'movie',
            'profession_id' => 2
        ));
        PeopleProfession::create(array(
            'people_id' => 8,
            'cast_id' => 1,
            'cast_type' => 'movie',
            'profession_id' => 3
        ));
        PeopleProfession::create(array(
            'people_id' => 9,
            'cast_id' => 3,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Chazz Michael Michaels'
        ));
        PeopleProfession::create(array(
            'people_id' => 10,
            'cast_id' => 3,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Jimmy MacElroy'
        ));
        PeopleProfession::create(array(
            'people_id' => 11,
            'cast_id' => 3,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Stranz Van Waldenberg'
        ));
        PeopleProfession::create(array(
            'people_id' => 12,
            'cast_id' => 3,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Fairchild Van Waldenberg'
        ));
        PeopleProfession::create(array(
            'people_id' => 13,
            'cast_id' => 3,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Katie Van Waldenberg'
        ));
        PeopleProfession::create(array(
            'people_id' => 14,
            'cast_id' => 3,
            'cast_type' => 'movie',
            'profession_id' => 2
        ));
        PeopleProfession::create(array(
            'people_id' => 15,
            'cast_id' => 3,
            'cast_type' => 'movie',
            'profession_id' => 2
        ));
        PeopleProfession::create(array(
            'people_id' => 16,
            'cast_id' => 3,
            'cast_type' => 'movie',
            'profession_id' => 3
        ));
        PeopleProfession::create(array(
            'people_id' => 17,
            'cast_id' => 3,
            'cast_type' => 'movie',
            'profession_id' => 3
        ));
        PeopleProfession::create(array(
            'people_id' => 18,
            'cast_id' => 2,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Mark Zuckerberg'
        ));
        PeopleProfession::create(array(
            'people_id' => 19,
            'cast_id' => 2,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Erica Albright'
        ));
        PeopleProfession::create(array(
            'people_id' => 20,
            'cast_id' => 2,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Billy Olson'
        ));
        PeopleProfession::create(array(
            'people_id' => 21,
            'cast_id' => 2,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Phoenix Club President'
        ));
        PeopleProfession::create(array(
            'people_id' => 22,
            'cast_id' => 2,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Dustin Moskovitz'
        ));
        PeopleProfession::create(array(
            'people_id' => 23,
            'cast_id' => 2,
            'cast_type' => 'movie',
            'profession_id' => 2
        ));
        PeopleProfession::create(array(
            'people_id' => 24,
            'cast_id' => 2,
            'cast_type' => 'movie',
            'profession_id' => 2
        ));
        PeopleProfession::create(array(
            'people_id' => 73,
            'cast_id' => 2,
            'cast_type' => 'movie',
            'profession_id' => 3
        ));
        PeopleProfession::create(array(
            'people_id' => 25,
            'cast_id' => 4,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Laura Poitras'
        ));
        PeopleProfession::create(array(
            'people_id' => 26,
            'cast_id' => 4,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Glenn Greenwald'
        ));
        PeopleProfession::create(array(
            'people_id' => 27,
            'cast_id' => 4,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Edward Snowden'
        ));
        PeopleProfession::create(array(
            'people_id' => 28,
            'cast_id' => 4,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Drill Sergeant'
        ));
        PeopleProfession::create(array(
            'people_id' => 29,
            'cast_id' => 4,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Hospital Doctor'
        ));
        PeopleProfession::create(array(
            'people_id' => 30,
            'cast_id' => 4,
            'cast_type' => 'movie',
            'profession_id' => 2
        ));
        PeopleProfession::create(array(
            'people_id' => 31,
            'cast_id' => 4,
            'cast_type' => 'movie',
            'profession_id' => 3
        ));
        PeopleProfession::create(array(
            'people_id' => 32,
            'cast_id' => 5,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Ivan Locke'
        ));
        PeopleProfession::create(array(
            'people_id' => 33,
            'cast_id' => 5,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Bethan (voice)'
        ));
        PeopleProfession::create(array(
            'people_id' => 34,
            'cast_id' => 5,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Katrina (voice)'
        ));
        PeopleProfession::create(array(
            'people_id' => 5,
            'cast_id' => 5,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Bethan (voice)'
        ));
        PeopleProfession::create(array(
            'people_id' => 35,
            'cast_id' => 5,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Gareth (voice)'
        ));
        PeopleProfession::create(array(
            'people_id' => 36,
            'cast_id' => 5,
            'cast_type' => 'movie',
            'profession_id' => 2
        ));
        PeopleProfession::create(array(
            'people_id' => 36,
            'cast_id' => 5,
            'cast_type' => 'movie',
            'profession_id' => 3
        ));
        PeopleProfession::create(array(
            'people_id' => 18,
            'cast_id' => 6,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'J. Daniel Atlas'
        ));
        PeopleProfession::create(array(
            'people_id' => 37,
            'cast_id' => 6,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Dylan Rhodes'
        ));
        PeopleProfession::create(array(
            'people_id' => 38,
            'cast_id' => 6,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Merritt McKinney / Chase McKinney'
        ));
        PeopleProfession::create(array(
            'people_id' => 39,
            'cast_id' => 6,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Jack Wilder'
        ));
        PeopleProfession::create(array(
            'people_id' => 40,
            'cast_id' => 6,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Walter Mabry'
        ));
        PeopleProfession::create(array(
            'people_id' => 41,
            'cast_id' => 6,
            'cast_type' => 'movie',
            'profession_id' => 2
        ));
        PeopleProfession::create(array(
            'people_id' => 42,
            'cast_id' => 6,
            'cast_type' => 'movie',
            'profession_id' => 3
        ));
        PeopleProfession::create(array(
            'people_id' => 43,
            'cast_id' => 7,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Pumpkin'
        ));
        PeopleProfession::create(array(
            'people_id' => 44,
            'cast_id' => 7,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Honey Bunny'
        ));
        PeopleProfession::create(array(
            'people_id' => 45,
            'cast_id' => 7,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Waitress'
        ));
        PeopleProfession::create(array(
            'people_id' => 46,
            'cast_id' => 7,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Vincent Vega'
        ));
        PeopleProfession::create(array(
            'people_id' => 47,
            'cast_id' => 7,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Jules Winnfield'
        ));
        PeopleProfession::create(array(
            'people_id' => 48,
            'cast_id' => 7,
            'cast_type' => 'movie',
            'profession_id' => 2
        ));
        PeopleProfession::create(array(
            'people_id' => 48,
            'cast_id' => 7,
            'cast_type' => 'movie',
            'profession_id' => 3
        ));
        PeopleProfession::create(array(
            'people_id' => 49,
            'cast_id' => 7,
            'cast_type' => 'movie',
            'profession_id' => 2
        ));
        PeopleProfession::create(array(
            'people_id' => 47,
            'cast_id' => 8,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Major Marquis Warren'
        ));
        PeopleProfession::create(array(
            'people_id' => 50,
            'cast_id' => 8,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'John Ruth'
        ));
        PeopleProfession::create(array(
            'people_id' => 51,
            'cast_id' => 8,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Daisy Domergue'
        ));
        PeopleProfession::create(array(
            'people_id' => 52,
            'cast_id' => 8,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Sheriff Chris Mannix'
        ));
        PeopleProfession::create(array(
            'people_id' => 53,
            'cast_id' => 8,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Bob (as Demian Bichir)'
        ));
        PeopleProfession::create(array(
            'people_id' => 48,
            'cast_id' => 8,
            'cast_type' => 'movie',
            'profession_id' => 2
        ));
        PeopleProfession::create(array(
            'people_id' => 48,
            'cast_id' => 8,
            'cast_type' => 'movie',
            'profession_id' => 3
        ));
        PeopleProfession::create(array(
            'people_id' => 54,
            'cast_id' => 9,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Terrorist (as Adrian Quentin)'
        ));
        PeopleProfession::create(array(
            'people_id' => 55,
            'cast_id' => 9,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Harry Hart / Galahad'
        ));
        PeopleProfession::create(array(
            'people_id' => 56,
            'cast_id' => 9,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Merlin'
        ));
        PeopleProfession::create(array(
            'people_id' => 57,
            'cast_id' => 9,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Lee'
        ));
        PeopleProfession::create(array(
            'people_id' => 58,
            'cast_id' => 9,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Lancelot'
        ));
        PeopleProfession::create(array(
            'people_id' => 59,
            'cast_id' => 9,
            'cast_type' => 'movie',
            'profession_id' => 2
        ));
        PeopleProfession::create(array(
            'people_id' => 60,
            'cast_id' => 9,
            'cast_type' => 'movie',
            'profession_id' => 2
        ));
        PeopleProfession::create(array(
            'people_id' => 60,
            'cast_id' => 9,
            'cast_type' => 'movie',
            'profession_id' => 3
        ));
        PeopleProfession::create(array(
            'people_id' => 61,
            'cast_id' => 10,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Django'
        ));
        PeopleProfession::create(array(
            'people_id' => 62,
            'cast_id' => 10,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Dr. King Schultz'
        ));
        PeopleProfession::create(array(
            'people_id' => 63,
            'cast_id' => 10,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Calvin Candie'
        ));
        PeopleProfession::create(array(
            'people_id' => 64,
            'cast_id' => 10,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Broomhilda von Shaft'
        ));
        PeopleProfession::create(array(
            'people_id' => 47,
            'cast_id' => 10,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Stephen'
        ));
        PeopleProfession::create(array(
            'people_id' => 52,
            'cast_id' => 10,
            'cast_type' => 'movie',
            'profession_id' => 1,
            'role' => 'Billy Crash'
        ));
        PeopleProfession::create(array(
            'people_id' => 48,
            'cast_id' => 10,
            'cast_type' => 'movie',
            'profession_id' => 2
        ));
        PeopleProfession::create(array(
            'people_id' => 48,
            'cast_id' => 10,
            'cast_type' => 'movie',
            'profession_id' => 3
        ));
        PeopleProfession::create(array(
            'people_id' => 65,
            'cast_id' => 2,
            'cast_type' => 'series',
            'profession_id' => 1,
            'role' => 'Donald G. Malarkey'
        ));
        PeopleProfession::create(array(
            'people_id' => 66,
            'cast_id' => 2,
            'cast_type' => 'series',
            'profession_id' => 1,
            'role' => 'Richard D. Winters'
        ));
        PeopleProfession::create(array(
            'people_id' => 68,
            'cast_id' => 2,
            'cast_type' => 'series',
            'profession_id' => 1,
            'role' => 'Antonio C. Garcia'
        ));
        PeopleProfession::create(array(
            'people_id' => 69,
            'cast_id' => 2,
            'cast_type' => 'series',
            'profession_id' => 1,
            'role' => 'Lewis Nixon'
        ));
        PeopleProfession::create(array(
            'people_id' => 70,
            'cast_id' => 2,
            'cast_type' => 'series',
            'profession_id' => 3
        ));
        PeopleProfession::create(array(
            'people_id' => 71,
            'cast_id' => 2,
            'cast_type' => 'series',
            'profession_id' => 2
        ));
        PeopleProfession::create(array(
            'people_id' => 72,
            'cast_id' => 1,
            'cast_type' => 'series',
            'profession_id' => 1,
            'role' => 'Himself - presenter'
        ));
        PeopleProfession::create(array(
            'people_id' => 74,
            'cast_id' => 1,
            'cast_type' => 'series',
            'profession_id' => 3
        ));

        PeopleProfession::create(array(
            'people_id' => 75,
            'cast_id' => 3,
            'cast_type' => 'series',
            'profession_id' => 2
        ));

        PeopleProfession::create(array(
            'people_id' => 76,
            'cast_id' => 3,
            'cast_type' => 'series',
            'profession_id' => 3 
        ));

        PeopleProfession::create(array(
            'people_id' => 77,
            'cast_id' => 3,
            'cast_type' => 'series',
            'profession_id' => 1, 
            'role' => 'Ciro Di Marzio'
        ));

        PeopleProfession::create(array(
            'people_id' => 78,
            'cast_id' => 3,
            'cast_type' => 'series',
            'profession_id' => 1, 
            'role' => 'Genny Savastano'
        ));

        PeopleProfession::create(array(
            'people_id' => 79,
            'cast_id' => 3,
            'cast_type' => 'series',
            'profession_id' => 1, 
            'role' => 'Pietro Savastano'
        ));

        PeopleProfession::create(array(
            'people_id' => 80,
            'cast_id' => 3,
            'cast_type' => 'series',
            'profession_id' => 1, 
            'role' => ' Annalisa \'Scianel\' Magliocca'
        ));

        PeopleProfession::create(array(
            'people_id' => 81,
            'cast_id' => 3,
            'cast_type' => 'series',
            'profession_id' => 1, 
            'role' => 'Malammore'
        ));
    }
}
