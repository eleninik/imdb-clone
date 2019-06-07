<?php

use Illuminate\Database\Seeder;
use App\Episode;

class EpisodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->delete();
        
        Episode::create(array(
            'title' => 'Islands',
            'released' => '2017-02-18',
            'plot' => 'Wildlife documentary series with David Attenborough, beginning with a look at the remote islands which offer sanctuary to some of the planet\'s rarest creatures.',
            'runtime' => '1h',
            'episode_number' => '1',
            'season_id' => '1'

        ));

        Episode::create(array(
            'title' => 'Mountains',
            'released' => '2017-02-25',
            'plot' => 'The wildlife documentary series with David Attenborough continues with a unique and intimate glimpse into secretive lives of mountain-dwelling animals.',
            'runtime' => '1h',
            'episode_number' => '2',
            'season_id' => '1'

        ));

        Episode::create(array(
            'title' => 'Jungles',
            'released' => '2017-03-04',
            'plot' => 'Jungles provide the richest habitats on the planet - mysterious worlds of high drama where extraordinary animals attempt to survive in the most competitive place on earth.',
            'runtime' => '1h',
            'episode_number' => '3',
            'season_id' => '1'

        ));

        Episode::create(array(
            'title' => 'Deserts',
            'released' => '2017-03-11',
            'plot' => 'The world\'s deserts force animals to come up with ingenious ways of coping with hostile conditions, giving rise to the most incredible survival stories on earth.',
            'runtime' => '1h',
            'episode_number' => '4',
            'season_id' => '1'

        ));

        Episode::create(array(
            'title' => 'Grasslands',
            'released' => '2017-03-18',
            'plot' => 'Grasslands cover one quarter of all land and support the vast gatherings of wildlife, but to survive here animals must endure the most hostile seasonal changes on the planet. From Asia\'s bizarre-looking saiga antelope to the giant anteaters of Brazil, grassland animals have adapted in extraordinary ways to cope with these extremes.',
            'runtime' => '1h',
            'episode_number' => '5',
            'season_id' => '1'

        ));

        Episode::create(array(
            'title' => 'Cities',
            'released' => '2017-03-25',
            'plot' => 'Cities are the newest habitat on Planet Earth. The series documents the wildlife in our cities.',
            'runtime' => '1h',
            'episode_number' => '6',
            'season_id' => '1'

        ));

        Episode::create(array(
            'title' => 'Currahee',
            'released' => '2001-09-09',
            'plot' => 'Easy Company goes through training under the leadership of a captain who relentlessly pushes them to their limits but may be limited as a leader in the field.',
            'runtime' => '1h 10min',
            'episode_number' => '1',
            'season_id' => '2'

        ));

        Episode::create(array(
            'title' => 'Day of Days',
            'released' => '2001-09-09',
            'plot' => 'Easy Company paratroopers jump behind enemy lines in Normandy on D-Day and struggle to reunite in hostile territory.',
            'runtime' => '49min',
            'episode_number' => '2',
            'season_id' => '2'

        ));

        Episode::create(array(
            'title' => 'Carentan',
            'released' => '2001-09-16',
            'plot' => 'Easy Company takes on German troops in the French town of Carentan, and the battle takes its toll on one soldier who is badly traumatized by the experience.',
            'runtime' => '1h 2min',
            'episode_number' => '3',
            'season_id' => '2'

        ));

        Episode::create(array(
            'title' => 'Replacements',
            'released' => '2001-09-23',
            'plot' => 'With the addition of many new men, Easy Company heads to Holland to participate in Operation Market Garden and prepare an Allied route into Germany, but they meet stiff German resistance.',
            'runtime' => '57min',
            'episode_number' => '4',
            'season_id' => '2'

        ));

        Episode::create(array(
            'title' => 'Crossroads',
            'released' => '2001-09-30',
            'plot' => 'Winters writes a report on the challenge of an unexpected resistance to a German attack, and is haunted by his conscience after shooting a teenage German SS soldier.',
            'runtime' => '53min',
            'episode_number' => '5',
            'season_id' => '2'

        ));

        Episode::create(array(
            'title' => 'Bastogne',
            'released' => '2001-10-07',
            'plot' => 'It\'s Christmas 1944, and the 101st is surrounded by Germans in the forest outside of Bastogne with a lack of supplies in bitter cold and snow.',
            'runtime' => '1h 4min',
            'episode_number' => '6',
            'season_id' => '2'

        ));

        Episode::create(array(
            'title' => 'The Breaking Point',
            'released' => '2001-10-14',
            'plot' => 'Easy Company remains in the Ardennes Forest preparing for an inevitable attack on German forces in the town of Foy. However, morale is low due to cold weather, constant shelling, poor leadership, and numerous casualties.',
            'runtime' => '1h 9min',
            'episode_number' => '7',
            'season_id' => '2'

        ));

        Episode::create(array(
            'title' => 'The Last Patrol',
            'released' => '2001-10-21',
            'plot' => 'Easy Company is in Hagenau in Feburary 1945, where they prepare for a night patrol mission to capture German prisoners. The patrol includes one veteran who is despised for missing Bastogne and a new lieutenant fresh out of West Point.',
            'runtime' => '56min',
            'episode_number' => '8',
            'season_id' => '2'

        ));

        Episode::create(array(
            'title' => 'Why We Fight ',
            'released' => '2001-10-28',
            'plot' => 'As the Allies move into Germany and the war comes closer to an end, disillusionment and anger set in for Easy Company - until they stumble onto a concentration camp abandoned by the German military.',
            'runtime' => '55min',
            'episode_number' => '9',
            'season_id' => '2'

        ));

        Episode::create(array(
            'title' => 'Points',
            'released' => '2001-11-4',
            'plot' => 'As the Germans surrender, it appears that the hard days for Easy Company are over as they are stationed in Austria. But they soon learn that those solders without enough service points will be sent to fight in Japan.',
            'runtime' => '59min',
            'episode_number' => '10',
            'season_id' => '2'

        ));


        Episode::create(array(
            'title' => 'Il clan dei Savastano',
            'released' => '2015-09-12',
            'plot' => 'A dispute between the Savastano clan and a rival faction led by Salvatore Conte escalates as Don Pietro Savastano orders his men to set fire to Conte\'s home as an act of punishment. The fire leads to a series of reprisals that culminates with a mission to kill Conte and his whole clan..',
            'runtime' => '53min',
            'episode_number' => '1',
            'season_id' => '3'

        ));
        Episode::create(array(
            'title' => 'Ti fidi di me?',
            'released' => '2014-05-06',
            'plot' => 'When Genny creates a rift with another clan, Pietro decides it\'s time to put him to the test and asks Ciro to mentor him. Pietro then tests Ciro\'s loyalty in his own unique way.',
            'runtime' => '56min',
            'episode_number' => '2',
            'season_id' => '3'

        ));
        Episode::create(array(
            'title' => 'L\'omm \'e casa',
            'released' => '2014-05-06',
            'plot' => 'When Genny creates a rift with another clan, Pietro decides it\'s time to put him to the test and asks Ciro to mentor him. Pietro then tests Ciro\'s loyalty in his own unique way.',
            'runtime' => '57min',
            'episode_number' => '3',
            'season_id' => '3'

        ));
        Episode::create(array(
            'title' => 'Sangue africano',
            'released' => '2014-05-13',
            'plot' => 'When Genny creates a rift with another clan, Pietro decides it\'s time to put him to the test and asks Ciro to mentor him. Pietro then tests Ciro\'s loyalty in his own unique way.',
            'runtime' => '55min',
            'episode_number' => '4',
            'season_id' => '3'

        ));
        Episode::create(array(
            'title' => 'Il ruggito della leonessa',
            'released' => '2014-05-13',
            'plot' => 'When Genny creates a rift with another clan, Pietro decides it\'s time to put him to the test and asks Ciro to mentor him. Pietro then tests Ciro\'s loyalty in his own unique way.',
            'runtime' => '55min',
            'episode_number' => '5',
            'season_id' => '3'
        ));
        Episode::create(array(
            'title' => 'Roulette spagnola',
            'released' => '2014-05-13',
            'plot' => 'When Genny creates a rift with another clan, Pietro decides it\'s time to put him to the test and asks Ciro to mentor him. Pietro then tests Ciro\'s loyalty in his own unique way.',
            'runtime' => '55min',
            'episode_number' => '6',
            'season_id' => '3'
        ));
        Episode::create(array(
            'title' => 'Imma contro tutti',
            'released' => '2014-05-13',
            'plot' => 'When Genny creates a rift with another clan, Pietro decides it\'s time to put him to the test and asks Ciro to mentor him. Pietro then tests Ciro\'s loyalty in his own unique way.',
            'runtime' => '55min',
            'episode_number' => '6',
            'season_id' => '3'
        ));
    }
}
