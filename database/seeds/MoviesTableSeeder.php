<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->delete();
        
        Movie::create(array(
            'title' => 'The Lone Ranger', 
            'year' => '2013',
            'age_rating' => 'PG-13', 
            'released' => '2013-05-03',
            'runtime' => '2h 30min',
            'short_plot' => 'Native American warrior Tonto recounts the untold tales that transformed John Reid, a man of the law, into a legend of justice.',
            'full_plot' => 'In the 1930s, an elderly Tonto tells a young boy the tale of John Reid, the Lone Ranger. An idealistic lawyer, he rides with his brother and fellow Texas Rangers in pursuit of the notorious Butch Cavendish. Ambushed by the outlaw and left for dead, John Reid is rescued by the renegade Comanche, Tonto, at the insistence of a mysterious white horse and offers to help him to bring Cavendish to justice. Becoming a reluctant masked rider with a seemingly incomprehensible partner, Reid pursues the criminal against all obstacles. However, John and Tonto learn that Cavendish is only part of a far greater injustice and the pair must fight it in an adventure that would make them a legend.',
            'production_country_id' => '1',
            'awards' => 'Nominated for 2 Oscars. Another 4 wins & 17 nominations.',
            'poster' => '/b4vil5ueYJNBNypHmo1tpuevh4z.jpg',
            'backdrop' => '/sgcgfrlOOB6lVXbfl75YTszF4jI.jpg',
            'studio_id' => '1',
            'media_website' => 'amdb.test',
            'trailer' => 'JjFsNSoDZK8'
        ));
        
        Movie::create(array(
            'title' => 'The Social Network', 
            'year' => '2010',
            'age_rating' => 'PG-13', 
            'released' => '2010-10-01',
            'runtime' => '2h',
            'short_plot' => 'Harvard student Mark Zuckerberg creates the social networking site that would become known as Facebook, but is later sued by two brothers who claimed he stole their idea, and the co-founder who was later squeezed out of the business.',
            'full_plot' => 'On a fall night in 2003, Harvard undergrad and computer programming genius Mark Zuckerberg sits down at his computer and heatedly begins working on a new idea. In a fury of blogging and programming, what begins in his dorm room soon becomes a global social network and a revolution in communication. A mere six years and 500 million friends later, Mark Zuckerberg is the youngest billionaire in history... but for this entrepreneur, success leads to both personal and legal complications.',
            'production_country_id' => '2',
            'awards' => 'Won 3 Oscars. Another 165 wins & 168 nominations.',
            'poster' => '/ok5Wh8385Kgblq9MSU4VGvazeMH.jpg',
            'backdrop' => '/8AazWuNBQV7QFjb9XNzJLox0Zey.jpg',
            'studio_id' => '2',
            'media_website' => 'http://www.thesocialnetwork-movie.com/',
            'trailer' => 'lB95KLmpLR4'
        ));

        Movie::create(array(
            'title' => 'Blades of Glory', 
            'year' => '2007',
            'age_rating' => 'PG-13', 
            'released' => '2007-03-30',
            'runtime' => '1h 33min',
            'short_plot' => 'In 2002, two rival Olympic ice skaters were stripped of their gold medals and permanently banned from men\'s single competition. Presently, however, they\'ve found a loophole that will allow them to qualify as a pairs team.',
            'full_plot' => 'When rivalry between the world\'s best men\'s figure skaters - sex addicted, improvisational Chazz Michael Michaels and germophobic, precise Jimmy MacElroy - breaks into a fight on the awards platform, they\'re banned from the event for life. Three years later, desire for a gold medal and a careful reading of the rules lead them to compete as skating\'s first male-male pair. Can they overcome mutual dislike, limited time to prepare, their coach\'s secret past, and the dirty tricks of their main opponents, the Van Waldenberg siblings? The key to victory or defeat may lie in the attraction of the virginal Jimmy toward Katie, the Van Waldenberg\'s little sister.',
            'production_country_id' => '2',
            'awards' => '3 wins & 10 nominations.',
            'poster' => '/7vbtLFfN00BaczHjOaPWui4aqg1.jpg',
            'backdrop' => '/4CDaseAR78XCvKPwbKrGOjUjeO6.jpg',
            'studio_id' => '2',
            'media_website' => 'amdb.test',
            'trailer' => 'YFE-6XlAAmE'
        ));

        Movie::create(array(
            'title' => 'Snowden', 
            'year' => '2016',
            'age_rating' => 'R', 
            'released' => '2016-09-16',
            'runtime' => '2h 14min',
            'short_plot' => 'The NSA\'s illegal surveillance techniques are leaked to the public by one of the agency\'s employees, Edward Snowden, in the form of thousands of classified documents distributed to the press.',
            'full_plot' => 'Snowden stars Joseph Gordon-Levitt and is written and directed by Oliver Stone. The script is based on the books The Snowden Files: The Inside Story of the World\'s Most Wanted Man by Luke Harding and Time of the Octopus by Anatoly Kucherena.',
            'production_country_id' => '2',
            'awards' => '3 wins & 7 nominations.',
            'poster' => '/mWOotrG1MMKP9iCy2uPepbu27jk.jpg',
            'backdrop' => '/ycHZ9NgC8Cee7wAsHn4X7cgXeSL.jpg',
            'studio_id' => '2',
            'media_website' => 'https://snowdenfilm.com/',
            'trailer' => 'QlSAiI3xMh4'
        ));

        Movie::create(array(
            'title' => 'Locke', 
            'year' => '2013',
            'age_rating' => 'R', 
            'released' => '2013-09-02',
            'runtime' => '1h 25min',
            'short_plot' => 'Ivan Locke, a dedicated family man and successful construction manager, receives a phone call on the eve of the biggest challenge of his career that sets in motion a series of events that threaten his carefully cultivated existence.',
            'full_plot' => 'Leaving the construction site on the eve of a major project, construction manager Ivan Locke receives news that sends him driving the two hours from Birmingham to London, but even further from the life he once knew. Making the decision that he has to make, he then calls his wife, his sons, his co-workers and boss telling them the secret that he is bearing and trying to keep his job and family intact. But even more importantly, he will have to face himself and the choices he has made.',
            'production_country_id' => '2',
            'awards' => '7 wins & 31 nominations.',
            'poster' => '/2Prgt4JXhwiwkgotknBO4scXR8S.jpg',
            'backdrop' => '/ijP0Bmn2m1U3DYFWsm2SFnNAXoT.jpg',
            'studio_id' => '2',
            'media_website' => 'amdb.test',
            'trailer' => 'MyoO35P41YM'
        ));

        Movie::create(array(
            'title' => 'Now You See Me 2', 
            'year' => '2016',
            'age_rating' => 'PG-13', 
            'released' => '2016-06-10',
            'runtime' => '2h 9min',
            'short_plot' => 'The Four Horsemen resurface, and are forcibly recruited by a tech genius to pull off their most impossible heist yet.',
            'full_plot' => 'One year after outwitting the FBI and winning the public\'s adulation with their Robin Hood-style magic spectacles, The Four Horsemen resurface for a comeback performance in hopes of exposing the unethical practices of a tech magnate. The man behind their vanishing act is none other than Walter Mabry, a tech prodigy who threatens the Horsemen into pulling off their most impossible heist yet. Their only hope is to perform one last unprecedented stunt to clear their names and reveal the mastermind behind it all.',
            'production_country_id' => '2',
            'awards' => '4 nominations.',
            'poster' => '/hU0E130tsGdsYa4K9lc3Xrn5Wyt.jpg',
            'backdrop' => '/zrAO2OOa6s6dQMQ7zsUbDyIBrAP.jpg',
            'studio_id' => '2',
            'media_website' => 'amdb.test',
            'trailer' => '4I8rVcSQbic'
        ));

        Movie::create(array(
            'title' => 'Pulp Fiction', 
            'year' => '1994',
            'age_rating' => 'R', 
            'released' => '1994-10-14',
            'runtime' => '2h 34min',
            'short_plot' => 'The lives of two mob hitmen, a boxer, a gangster\'s wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
            'full_plot' => 'Jules Winnfield (Samuel L. Jackson) and Vincent Vega (John Travolta) are two hit men who are out to retrieve a suitcase stolen from their employer, mob boss Marsellus Wallace (Ving Rhames). Wallace has also asked Vincent to take his wife Mia (Uma Thurman) out a few days later when Wallace himself will be out of town. Butch Coolidge (Bruce Willis) is an aging boxer who is paid by Wallace to lose his fight. The lives of these seemingly unrelated people are woven together comprising of a series of funny, bizarre and uncalled-for incidents.',
            'production_country_id' => '2',
            'awards' => 'Won 1 Oscar. Another 60 wins & 68 nominations.',
            'poster' => '/dM2w364MScsjFf8pfMbaWUcWrR.jpg',
            'backdrop' => '/9rZg1J6vMQoDVSgRyWcpJa8IAGy.jpg',
            'studio_id' => '2',
            'media_website' => 'amdb.test',
            'trailer' => 's7EdQ4FqbhY'
        ));

        Movie::create(array(
            'title' => 'The Hateful Eight', 
            'year' => '2015',
            'age_rating' => 'R', 
            'released' => '2015-12-30',
            'runtime' => '3h 7min',
            'short_plot' => 'In the dead of a Wyoming winter, a bounty hunter and his prisoner find shelter in a cabin currently inhabited by a collection of nefarious characters.',
            'full_plot' => 'Some time after the Civil War, a stagecoach hurtles through the wintry Wyoming landscape. Bounty hunter John Ruth and his fugitive captive Daisy Domergue race towards the town of Red Rock, where Ruth will bring Daisy to justice. Along the road, they encounter Major Marquis Warren (an infamous bounty hunter) and Chris Mannix (a man who claims to be Red Rock\'s new sheriff). Lost in a blizzard, the bunch seeks refuge at Minnie\'s Haberdashery. When they arrive they are greeted by unfamiliar faces: Bob, who claims to be taking care of the place while Minnie is gone; Oswaldo Mobray, the hangman of Red Rock; Joe Gage, a cow puncher; and confederate general Sanford Smithers. As the storm overtakes the mountainside, the eight travelers come to learn that they might not make it to Red Rock after all...',
            'production_country_id' => '2',
            'awards' => 'Won 1 Oscar. Another 39 wins & 113 nominations.',
            'poster' => '/fqe8JxDNO8B8QfOGTdjh6sPCdSC.jpg',
            'backdrop' => '/sSvgNBeBNzAuKl8U8sP50ETJPgx.jpg',
            'studio_id' => '2',
            'media_website' => 'amdb.test',
            'trailer' => '6_UI1GzaWv0'
        ));

        Movie::create(array(
            'title' => 'Kingsman: The Secret Service', 
            'year' => '2014',
            'age_rating' => 'R', 
            'released' => '2015-02-13',
            'runtime' => '2h 9min',
            'short_plot' => 'A spy organization recruits an unrefined, but promising street kid into the agency\'s ultra-competitive training program, just as a global threat emerges from a twisted tech genius.',
            'full_plot' => 'A young man named Eggsy whose father died when he was a young boy, is dealing with living with the creep his mother is with now, who mistreats her and him. He goes out and does something to one of the creep\'s friends. He gets arrested and he calls a number a man gave him around the time his father died, to call if he needs help. A man named Harry approaches him and tells him he\'s the one who helped him. He tells him that he knew his father. When the man Eggsy slighted wants some payback, Harry takes care of him and his companions single handed. Harry then tells Eggsy that he\'s part of a secret organization called the Kingsman and his father was also part of it. He died trying to make the world safe. Harry offers Eggsy the opportunity to be a Kingsman and he takes it. He undergoes a grueling training course. Harry is looking into the demise of another Kingsman and the trail leads him to tech billionaire named Valentine aka V who is also curious about the group following him',
            'production_country_id' => '2',
            'awards' => '7 wins & 26 nominations.',
            'poster' => '/8x7ej0LnHdKUqilNNJXYOeyB6L9.jpg',
            'backdrop' => '/7McaexSsSTLD8V17UgaZAfI0Cu9.jpg',
            'studio_id' => '2',
            'media_website' => 'amdb.test',
            'trailer' => 'm4NCribDx4U'
        ));

        Movie::create(array(
            'title' => 'Django Unchained', 
            'year' => '2012',
            'age_rating' => 'R', 
            'released' => '2012-12-25',
            'runtime' => '2h 45min',
            'short_plot' => 'With the help of a German bounty hunter, a freed slave sets out to rescue his wife from a brutal Mississippi plantation owner.',
            'full_plot' => 'A German dentist buys the freedom of a slave and trains him with the intent to make him his deputy bounty hunter. Instead, he is led to the site of the slave\'s wife who belongs to a ruthless plantation owner.',
            'production_country_id' => '2',
            'awards' => 'Won 2 Oscars. Another 56 wins & 151 nominations.',
            'poster' => '/5WJnxuw41sddupf8cwOxYftuvJG.jpg',
            'backdrop' => '/qUcmEqnzIwlwZxSyTf3WliSfAjJ.jpg',
            'studio_id' => '2',
            'media_website' => 'amdb.test',
            'trailer' => 'eUdM9vrCbow'
        ));
    }
}
