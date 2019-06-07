<?php

use Illuminate\Database\Seeder;
use App\People;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->delete();

        People::create(array(
            'firstname' => 'Johnny',
            'lastname' => 'Depp',
            'born' => '1963-06-09 in Owensboro, Kentucky, USA',
            'bio' => 'Johnny Depp is perhaps one of the most versatile actors of his day and age in Hollywood. He was born John Christopher Depp II in Owensboro, Kentucky, on June 9, 1963, to Betty Sue (Wells), who worked as a waitress, and John Christopher Depp, a civil engineer. Depp was raised in Florida.',
            'photo' => '/ea4fTp9T8Zy2KWxyFsqDIBgHZmb.jpg',
            'awards' => '75 wins and 137 nominations'  
        ));
        People::create(array(
            'firstname' => 'Armie',
            'lastname' => 'Hammer',
            'born' => '1986-08-28 in Los Angeles, California, USA',
            'bio' => 'Armand Douglas Hammer was born in Los Angeles, California, to Dru Ann (Mobley) and Michael Armand Hammer, a businessman. His great-grandfather, Armand Hammer, was a prominent tycoon and philanthropist who ran the company Occidental Petroleum for many decades. Armie\'s recent ancestry includes Russian, Jewish, English, Scots-Irish, and German.',
            'photo' => '/sJR75CkupC661xWsnCXzlpicHo8.jpg',
            'awards' => 'all 6 wins and 19 nominations'
        ));
        People::create(array(
            'firstname' => 'William',
            'lastname' => 'Fichtner',
            'born' => '1956-11-27 in Mitchell Field Air Force Base, East Meadow, Long Island, New York, USA',
            'bio' => 'A small-town guy with a big heart, William Fichtner has been captivating the hearts of Western New Yorkers for decades. Bill was born in 1956 on Long Island, New York, to Patricia A. (Steitz) and William E. Fichtner. He is of German, Irish, and English descent. Fichtner was raised in Cheektowaga, and graduated from Maryvale High School in 1974. ',
            'photo' => '/oIGjbztWvTqn4tnolW9rDCjpgxu.jpg',
            'awards' => '6 wins and 5 nominations'
        ));
        People::create(array(
            'firstname' => 'Tom',
            'lastname' => 'Wilkinson',
            'born' => '1948-02-05 in Wharfedale, East Meadow, West Riding of Yorkshire, England, UK',
            'bio' => 'Wilkinson first became active in film and television in the mid-1970s, but did not become familiar to an international audience until 1997. That was when he starred as one of six unemployed workers who strip for cash in Best Picture nominee Allt eller inget (1997), and he went on to win a BAFTA for Best Performance by an Actor in a Supporting Role. That same year, he was featured in Oscar och Lucinda (1997) and Wilde (1997). Wilkinson was also shown to memorable effect as a theatre financier with acting aspirations in Best Picture winner Shakespeare in Love (1998).',
            'photo' => '/4mxZKgdem0sQ8hJd0Y7TREwq7TJ.jpg',
            'awards' => '24 wins and 70 nominations'
        ));
        People::create(array(
            'firstname' => 'Ruth',
            'lastname' => 'Wilson',
            'born' => '1982-01-13 in Ashford, Kent, England, UK',
            'bio' => 'Ruth Wilson, born on 13 January 1982, is an English actress. She is known for her performances in Suburban Shootout (2006), Jane Eyre (2006), and as "Alice Morgan" in the BBC-TV psychological crime drama, Luther (2010), since 2010. She has also appeared in Anna Karenina (2012), The Lone Ranger (2013), and Saving Mr. Banks (2013). In 2014, she had a voice role in the film, Locke (2013), and began a starring role in the Showtime series, The Affair (2014).',
            'photo' => '/8WsgM4cTVxR9glsrW4Xh3ExTmXZ.jpg',
            'awards' => '2 wins and 12 nominations'
        ));
        People::create(array(
            'firstname' => 'Justin',
            'lastname' => 'Haythe',
            'bio' => 'Justin Haythe is a writer and producer, known for Revolutionary Road (2008), The Lone Ranger (2013) and A Cure for Wellness (2016).',
            'awards' => '2 wins and 7 nominations'
        ));
        People::create(array(
            'firstname' => 'Ted',
            'lastname' => 'Elliot',
            'born' => '1961-07-04 in Santa Ana, California, USA',
            'bio' => 'Ted Elliott was born on July 4, 1961 in Santa Ana, California, USA. He is a writer, known for Shrek (2001), The Lone Ranger (2013) and Pirates of the Caribbean: Svarta Pärlans förbannelse (2003).',
            'awards' => '3 wins and 12 nominations'
        ));
        People::create(array(
            'firstname' => 'Gore',
            'lastname' => 'Verbinski',
            'born' => '1964-03-16 in Oak Ridge, Tennessee, USA',
            'bio' => 'ore Verbinski, one of American cinema\'s most inventive directors who was a punk-rock guitarist as a teenager and had to sell his guitar to buy his first camera, is now the director of Pirates of the Caribbean: Död mans kista (2006) which made the industry record for highest opening weekend of all time ($135,600,000) and grossed over $1 billion dollars worldwide.',
            'photo' => '/bV0rGSPrK4AUvODjB3zMAwDdeIf.jpg',
            'awards' => '9 wins and 12 nominations'
        ));
        People::create(array(
            'firstname' => 'Will',
            'lastname' => 'Ferrell',
            'born' => '1967-07-16 in Irvine, California, USA',
            'bio' => 'A graduate of the University of Southern California, Ferrell became interested in performing while a student at University High School in Irvine, where he made his school\'s daily morning announcements over the public address system in disguised voices. He started as a member of the Los Angeles comedy/improvisation group The Groundlings, where fellow cast members Ana Gasteyer, Maya Rudolph and former Saturday Night Live (1975) repertory players such as Laraine Newman, Jon Lovitz and Phil Hartman began their careers. It was there he met Chris Kattan and the two became good friends and both went on to Saturday Night Live (1975) later. He has also appeared on several television programs, including Strangers with Candy (1999), Inte bara morsa (1993) and Living Single (1993) during his time at The Groundlings. Will also lent his voice to the armless and legless dad of cartoon family "The Oblongs".',
            'photo' => '/jwKrNtRCRqPYHtb5I525VKN1pjv.jpg',
            'awards' => '11 wins and 69 nominations'
        ));
        People::create(array(
            'firstname' => 'Jon',
            'lastname' => 'Heder',
            'born' => '1977-10-26 in Fort Collins, Colorado, USA',
            'bio' => 'Jon Heder was born on October 26, 1977 in Fort Collins, Colorado, USA as Jonathan Joseph Heder. He is an actor and producer, known for Napoleon Dynamite (2004), The Benchwarmers (2006) and Blades of Glory (2007). He has been married to Kirsten Heder since November 23, 2002. They have three children.',
            'photo' => '/8UfmspCK5eSRULHyqUzWrKLC0t5.jpg',
            'awards' => '7 wins and 17 nominations'
        ));
        People::create(array(
            'firstname' => 'Will',
            'lastname' => 'Arnett',
            'born' => '1970-05-04 in Toronto, Ontario, Canada',
            'bio' => 'Will Arnett is a Canadian-American actor, voice actor, and comedian. He played George Oscar "Gob" Bluth II in the Fox series, Arrested Development (2003). He also appeared in films, such as Lego-filmen (2014), Teenage Mutant Ninja Turtles (2014), Teenage Mutant Ninja Turtles: Out of the Shadows (2016) and The LEGO Batman Movie (2017). Arnett also voices the title character of Netflix\'s original animated series, BoJack Horseman (2014).',
            'photo' => '/vHCqn3SHfSV6GOWrxzEtoDaSMoU.jpg',
            'awards' => '7 wins and 27 nominations'
        ));
        People::create(array(
            'firstname' => 'Amy',
            'lastname' => 'Poehler',
            'born' => '1971-11-16 in Burlington, Massachusetts, USA',
            'bio' => 'Amy Meredith Poehler was born in Newton, Massachusetts, to high school teachers Eileen Frances (Milmore) and William Grinstead Poehler. Her brother is comedian Greg Poehler. She is of Irish (from her mother) and English, Irish, German, and Portuguese (from her father) descent.',
            'photo' => '/jZQZ7Sp180TBBAfr8vl174AiEmT.jpg',
            'awards' => '27 wins and 79 nominations'
        ));
        People::create(array(
            'firstname' => 'Jenna',
            'lastname' => 'Fischer',
            'born' => '1974-03-07 in Fort Wayne, Indiana, USA',
            'bio' => 'Emmy-nominated actress Jenna Fischer, known for playing the character of receptionist Pam Beesley in The Office (2005), was born Regina Marie Fischer on March 7, 1974 in Fort Wayne, Indiana. She is the daughter of Anne (Miller), a teacher, and James E. Fischer, a plastic engineer. Her ancestry includes German, Swiss, Scots-Irish, English, and Czech. Raised in St. Louis, Missouri, she studied theater arts at Truman State University. She made her debut as a professional actress in the 1998 film Born Champion (1998).',
            'photo' => '/i8jVPF6H6OxuXcZwKUSNYJjkZJy.jpg',
            'awards' => '6 wins and 20 nominations'
        ));
        People::create(array(
            'firstname' => 'Jeff',
            'lastname' => 'Cox',
            'born' => '1976-07-03 in Chicago, Illinois, USA'
            
        ));
        People::create(array(
            'firstname' => 'Craig',
            'lastname' => 'Cox',
            'bio' => 'Craig Cox is a writer and actor, known for Blades of Glory (2007), I, Thalus and R5: All Day, All Night (2015).'
            
        ));
        People::create(array(
            'firstname' => 'Josh',
            'lastname' => 'Gordon',
            'bio' => 'He is best known for directing the films, "Blades of Glory", "Office Christmas Party" and "The Switch". He is one half of the directing team known as Speck and Gordon with co-director, "Will Speck". The team is also known for their prolific advertising career, having directed hundreds of commercials including the iconic Cavemen and Gecko campaigns for Geico. Their work has won every major award in advertising, including Cannes Lions, Cleos, British Arrows, and the ADA 50. He has also been nominated for an Academy Award for his short film "Culture" and for an Emmy for his series "The Power Inside" staring "Harvey Keitel".',
            'photo' => '/g316UVVZWfD4cXQpxYirnhgop7U.jpg',
            'awards' => '2 wins and 2 nominations'
        ));
        People::create(array(
            'firstname' => 'Will',
            'lastname' => 'Speck',
            'bio' => 'Will Speck is a director and producer, known for Office Christmas Party (2016), Pappa på burk (2010) and Blades of Glory (2007).',
            'photo' => '/sJk2MHa0G6mndPrGKRBnTjNhU8w.jpg'
        ));
        People::create(array(
            'firstname' => 'Jesse',
            'lastname' => 'Eisenberg',
            'born' => '1983-10-05 in New York City, New York, USA',
            'bio' => 'Curly haired and with a fast-talking voice, Jesse Eisenberg is a movie actor, known for his Academy Award nominated role as Mark Zuckerberg in the 2010 film The Social Network. He has also starred in the films The Squid and the Whale, Adventureland, The Education of Charlie Banks, 30 Minutes or Less, Now You See Me and Zombieland. Additionally, he played Lex Luthor in the 2016 film Batman v Superman: Dawn of Justice.',
            'photo' => '/c01G88eCpiLLmT4RIWGkr7nm31o.jpg',
            'awards' => '21 wins and 57 nominations'
        ));
        People::create(array(
            'firstname' => 'Rooney',
            'lastname' => 'Mara',
            'born' => '1985-04-17 in Bedford, New York',
            'bio' => 'Actress and philanthropist Rooney Mara was born on April 17, 1985 in Bedford, New York. She made her screen debut in the slasher film Mördande legender - Bloody Mary (2005), went on to have a supporting role in the independent coming-of-age drama Tanner Hall (2009), and has since starred in the horror remake Terror på Elm Street (2010), the biographical drama Social Network (2010), the thriller remake The Girl with the Dragon Tattoo (2011), and the romantic drama Carol (2015).',
            'photo' => '/7mHmLMDXIpGOGv0YKSukbv7VMIO.jpg',
            'awards' => '26 wins and 64 nominations'
        ));
        People::create(array(
            'firstname' => 'Bryan',
            'lastname' => 'Barter',
            'born' => '1976-03-18 in Ann Arbor, Michigan, USA',
            'bio' => 'Bryan Barter was born on March 18, 1976 in Ann Arbor, Michigan, USA. He is an actor, known for Social Network (2010), Arn: Tempelriddaren (2007) and Duke (2013).',
            'photo' => '/7OOfftiFK4eszUA5WFSCsoo2nvT.jpg',
            'awards' => ''
        ));
        People::create(array(
            'firstname' => 'Dustin',
            'lastname' => 'Fitzsimons',
            'born' => '1986-12-19 in Sterling, Colorado, USA',
            'bio' => 'Dustin Began his career in 2008 after making several appearances in Little Caesars commercials that began airing across the country. His unique acting style and sense of humor coupled with an all American look quickly opened doors for him in the film and television world. Once Dustin began Landing roles in Independent features such as Street Racer (film) and House of the Wolf Man Hollywood\'s mainstream entertainment executives began to take notice. Dustin quickly began making appearances on networks such as TLC and CBS including a role on the hit day time soap The Young and The Restless. Columbia Pictures also cast Fitzsimons in David Fincher\'s hit film The Social Network as the president of Harvard\'s prestigious Phoenix Club.',
            'photo' => '/j8SdVfAPgotZDbCtPoBCCJ26F1V.jpg',
            'awards' => ''
        ));
        People::create(array(
            'firstname' => 'Joseph',
            'lastname' => 'Mazzello',
            'born' => '1983-09-21 in Rhinebeck, New York, USA',
            'bio' => 'Born in Rhinebeck, New York, he got into acting when he was 5 years old, after his sister had appeared in 30-odd commercials. Since then he has acted opposite some of the best actors in Hollywood as a bright, expressive actor with complexity, sensitivity, and emotion. He attended film school at USC and got a degree in cinema and television production. He plans on continuing his acting career while also following his aspirations of becoming a director.',
            'photo' => '/zsBGvymDqB737PerJTqhS9dPuBd.jpg',
            'awards' => '7 wins and 11 nominations'
        ));
        People::create(array(
            'firstname' => 'Aaron',
            'lastname' => 'Sorkin',
            'born' => '1961-06-09 in New York City, New York, USA',
            'bio' => '
            Aaron Sorkin grew up in Scarsdale, a suburb of New York City where he was very involved in his high school drama and theater club. After graduating from Syracuse University with a Bachelor of Fine Arts in Theater, Sorkin intended to pursue a career in acting. It took him only a short time to realize that his true love, and his true talent, lay in writing. His first play, "Removing All Doubt", was not an immediate success, but his second play, "Hidden in This Picture", debuted in 1988 at the West Bank Cafe Downstairs Theater Bar. A longer version of "Hidden in This Picture", called "Making Movies", opened at the Promenade Theater in 1990. Despite his youth and relative inexperience, Sorkin was about to break into the spotlight',
            'photo' => '/oFff5AbvrhmPW2WsyXV5cL7KURN.jpg',
            'awards' => '82 wins and 84 nominations'
        ));
        People::create(array(
            'firstname' => 'Ben',
            'lastname' => 'Mezrich',
            'born' => ' February 7, 1969 in Princeton, New Jersey, USA',
            'bio' => 'Ben Mezrich graduated magna cum laude from Harvard in 1991. Since then he has published eight books with a combined printing of more than a million copies in nine languages. He is the author of the blockbuster New York Times bestseller Bringing Down the House: The True Story of Six MIT Kids Who Took Vegas for Millions, which is being made into a major motion picture produced by Kevin Spacey and MGM. Ugly Americans is Mezrich\'s eighth book and his second foray into nonfiction.',
            'photo' => '/5tTvjyPJPeUjw14tfiqMlRZpjRa.jpg',
            'awards' => '1 wins and 0 nominations'
        ));
        People::create(array(
            'firstname' => 'Melissa',
            'lastname' => 'Leo',
            'born' => 'September 14, 1960 in New York City, New York, USA',
            'bio' => 'Melissa Leo was born on September 14, 1960 in New York City, New York, USA as Melissa Chessington Leo. She is an actress and producer, known for The Fighter (2010), Oblivion (2013) and 21 gram (2003).',
            'photo' => '/pWP5xzOtoOcqJ0lZo2xguQ5BnrB.jpg',
            'awards' => '48 wins and 75 nominations'
        ));
        People::create(array(
            'firstname' => 'Zachary',
            'lastname' => 'Quinto',
            'born' => 'June 2, 1977 in Pittsburgh, Pennsylvania, USA',
            'bio' => 'Zachary Quinto was born in Pittsburgh, Pennsylvania, to Margaret J. (McArdle), an Irish-American office worker, and Joseph John Quinto, an Italian-American barber. Zachary graduated from Central Catholic High School in Pittsburgh, with the class of 1995, where he won Pittsburgh\'s Gene Kelly Award for Best Supporting Actor for his performance as the Major General in Gilbert and Sullivan\'s \"The Pirates of Penzance\". He then went on to attend Carnegie Mellon University, where he continued to hone his talents by performing in plays and musicals. He first appeared on numerous television series since 2000 and, in 2003, landed the role of computer expert \"Adam Kaufman\" on the Fox series, 24 (2001), during its third season. In 2006, Quinto portrayed serial killer \"Sylar\" on the science fiction series, Heroes (2006), until its cancellation in 2010, after four seasons. He was cast in his first main film role as \"Spock\", in the hugely successful franchise reboot, Star Trek (2009).',
            'photo' => '/gSBxQWda0T67hrK3pNyqreRYoyw.jpg',
            'awards' => '10 wins and 24 nominations'
        ));
        People::create(array(
            'firstname' => 'Joseph',
            'lastname' => 'Gordon-Levitt',
            'born' => ' February 17, 1981 in Los Angeles, California, USA',
            'bio' => 'Joseph Leonard Gordon-Levitt was born February 17, 1981 in Los Angeles, California, to Jane Gordon and Dennis Levitt. Joseph was raised in a Jewish family with his late older brother, Dan Gordon-Levitt, who passed away in October 2010. His parents worked for the Pacifica Radio station KPFK-FM and his maternal grandfather, Michael Gordon, had been a well-known movie director. After working for several years as a child actor, Joseph became better known for starring on the hit television series Tredje klotet från solen (1996), for which he earned two Hollywood Reporter Young Star Awards.',
            'photo' => '/zSuXCR6xCKIgo0gWLdp8moMlH3I.jpg',
            'awards' => '21 wins and 65 nominations'
        ));
        People::create(array(
            'firstname' => 'Jaymes',
            'lastname' => 'Butler',
            'born' => 'November 1, 1959 in USA',
            'bio' => 'Jaymes Butler (A.K.A Jaymes Butler, James E Butler) Was born in Columbus Ohio. His dream to work in the film business was something he had since they early age of 8 years. He would perform backyard shows for the neighborhood "Rug Rats". Later James landed his first professional job at Disney, then later had some small roles in varies Television series. His love for the stage came through the Direction of the late Mrs Billie Daniels (A.K.A Mrs D) She was more than a teacher, coach for him but was a sub mother figure for him as well. OLD "Old lady Daniels " was the influence that Jaymes needed to get him moving in the right direction. His biggest fan and supporter, is his sister Tonya L Butler. ',
            'photo' => '/ck82VxpehseBppiCsw3MZBLDk8A.jpg'
        ));
        People::create(array(
            'firstname' => 'Robert',
            'lastname' => 'Firth',
            'bio' => 'Robert Firth was born in Philadelphia in 1960 into a typical English household, he was the youngest of three. He trained with Jose Quintero, co-founder of the Circle in the Square Theater, in Greenwich Village. In addition to his writing and directing, Robert is also a pop art and voice over artist, and lives in London and Los Angeles. Notable roles include; Machiavellian CEO Michael Gorse in director Tom Shankland\'s mind-bending mystery The City & The City; earnest lead detective Lt. Charles Scherer in Tom Keeling\'s award winning debut feature The Head Hunter, and avuncular orthopaedic surgeon Dr. Stillwell in Oliver Stone\'s controversial biopic Snowden. ',
            'photo' => '/1mq1G9iiu5u2QBgfQpcay6i7pIi.jpg'
        ));
        People::create(array(
            'firstname' => 'Kieran',
            'lastname' => 'Fitzgerald',
            'awards' => '1 wins and 2 nominations'
        ));
        People::create(array(
            'firstname' => 'Oliver',
            'lastname' => 'Stone',
            'born' => ' September 15, 1946 in New York City, New York, USA',
            'bio' => 'Oliver Stone has become known as a master of controversial subjects and a legendary film maker. His films are filled with a variety of film angles and styles, he pushes his actors to give Oscar-worthy performances, and despite his failures, has always returned to success.',
            'photo' => '/uHdNGBkrI74eYfUP2Uie7nuo0Nn.jpg',
            'awards' => '60 wins and 50 nominations'
        ));
        People::create(array(
            'firstname' => 'Tom',
            'lastname' => 'Hardy',
            'born' => ' September 15, 1977 in Hammersmith, London, England, UK',
            'bio' => 'With his breakthrough performance as Eames in Christopher Nolan\'s science fiction thriller Inception (2010), English actor Tom Hardy has been brought to the attention of mainstream audiences worldwide. However, the versatile actor has been steadily working on both stage and screen since his television debut in the miniseries Band of Brothers (2001). After being cast in the World War II drama, Hardy left his studies at the prestigious Drama Centre in London and was subsequently cast as Twombly in Ridley Scott\'s Black Hawk Down (2001) and as the villain Shinzon in Star Trek: Nemesis (2002).',
            'photo' => '/mHSmt9qu2JzEPqnVWCGViv9Stnn.jpg',
            'awards' => '16 wins and 76 nominations'
        ));
        People::create(array(
            'firstname' => 'Olivia',
            'lastname' => 'Colman',
            'born' => ' January 30, 1974 in Norwich, Norfolk, England, UK',
            'bio' => 'Olivia Colman was born on January 30, 1974 in Norwich, Norfolk, England as Sarah Caroline Olivia Colman. She is an actress, known for Tyrannosaur (2011), The Lobster (2015) and Hot Fuzz (2007). She has been married to Ed Sinclair since August 2001. They have three children.',
            'photo' => '/2cEUg6zA3XPXujBs9p0N07O18Ka.jpg',
            'awards' => '22 wins and 23 nominations'
        ));
        People::create(array(
            'firstname' => 'Andrew',
            'lastname' => 'Scott',
            'born' => 'October 21, 1976 in Dublin, Ireland',
            'bio' => 'Andrew Scott was born in Dublin, Ireland, the middle child with two sisters, in a financially comfortable home which allowed his parents, Jim and Nora, to send him to a private Catholic school for boys. He started acting as a child when he was in commercials on Irish TV, then was chosen from his acting school at 17 to star in his first professional role in the 1994 Irish film, Korea. Still in his teens he went on to perform at the Abbey Theatre, the national theater of Ireland in several productions. Later, Scott moved to London for a supporting role in Longitude, a television movie starring Michael Gambon.',
            'photo' => '/3yu4zC3OVq2lvmMqnPT4RYH4sBU.jpg',
            'awards' => '5 wins and 5 nominations'
        ));
        People::create(array(
            'firstname' => 'Ben',
            'lastname' => 'Daniels',
            'born' => 'June 10, 1964 in Nuneaton, Warwickshire, England, UK',
            'bio' => 'Ben Daniels is a multi-award winning performer who is equally at home whether working in Film, Television or Theatre. He was born in the Midlands and became interested in acting through drama lessons while at comprehensive school. He began his career after leaving London\'s prestigious LAMDA drama school. His early work in theatres around the UK led to him being cast as Richard Loeb, one of the two Chicago "thrill killers" who murdered a nine-year-old boy in John Logan\'s factual play, "Never the Sinner", at London\'s Playhouse Theatre. ',
            'photo' => '/x6MI4Fdz1XbERbNbXYoxTK6NAgv.jpg',
            'awards' => '0 wins and 1 nominations'
        ));
        People::create(array(
            'firstname' => 'Steven',
            'lastname' => 'Knight',
            'born' => '1959 in Marlborough, England, UK',
            'bio' => 'Steven Knight is a British screenwriter and film director. He is best known for screenplays he wrote for the films Dirty Pretty Things (2002) and Eastern Promises (2007), and also directed as well as written the film Locke (2013).',
            'photo' => '/6QiGHyAWJv5wSyWNUxZuMlBCXgy.jpg',
            'awards' => '10 wins and 27 nominations'
        ));
        People::create(array(
            'firstname' => 'Mark',
            'lastname' => 'Ruffalo',
            'born' => 'November 22, 1967 in Kenosha, Wisconsin, USA',
            'bio' => 'Mark Ruffalo was born in Kenosha, Wisconsin, to Marie Rose (Hebert), a stylist and hairdresser, and Frank Lawrence Ruffalo, a construction painter. His father\'s ancestry is Italian, and his mother is of half French-Canadian and half Italian descent. Mark moved with his family to Virginia Beach, Virginia, where he lived out most of his teenage years. Following high school, Mark moved with his family to San Diego and soon migrated north, eventually settling in Los Angeles.',
            'photo' => '/w5yqDZo2IZV0vsrsMWUqloNiutb.jpg',
            'awards' => '29 wins and 109 nominations'
        ));
        People::create(array(
            'firstname' => 'Woody',
            'lastname' => 'Harrelson',
            'born' => 'July 23, 1961 in Midland, Texas, USA',
            'bio' => 'Academy Award-nominated and Emmy Award-winning actor Woodrow Tracy Harrelson was born on July 23, 1961 in Midland, Texas, to Diane Lou (Oswald) and Charles Harrelson. He grew up in Lebanon, Ohio, where his mother was from. After receiving degrees in theater arts and English from Hanover College, he had a brief stint in New York theater. He was soon cast as Woody on TV series Skål (1982), which wound up being one of the most-popular TV shows ever and also earned Harrelson an Emmy for his performance in 1989.',
            'photo' => '/1ecdooAHICUhCZKKEKlFtccEmTU.jpg',
            'awards' => '21 wins and 77 nominations'
        ));
        People::create(array(
            'firstname' => 'Dave',
            'lastname' => 'Franco',
            'born' => 'June 12, 1985 in Palo Alto, California, USA',
            'bio' => 'David John Franco was born in Palo Alto, California, to Betsy Franco, an author, and Douglas Eugene "Doug" Franco, who ran a Silicon Valley business. His mother is Jewish and his father was of Portuguese and Swedish descent. He has two older brothers, actor James Franco and Tom Franco. Dave made his first television appearance at the age of 21, in 2006, in an episode of Sjunde himlen (1996). A string of high-profile TV work followed, interspersed with roles in some moderately successful movies, including Charlie St. Cloud (2010) and Fright Night (2011), and he came to bigger prominence when he played Eric Molson in the hit movie version of the cult TV series 21 Jump Street (2012). He subsequently co-starred in the zombie romance Warm Bodies (2013) and the thriller Now You See Me (2013), and provided a voice role for Lego-filmen (2014). His upcoming films include Bad Neighbours (2014), 22 Jump Street (2014), and Unfinished Business (2015).',
            'photo' => '/po5nidw70UdgJc167Br5WYNysFU.jpg',
            'awards' => '3 wins and 2 nominations'
        ));
        People::create(array(
            'firstname' => 'Daniel',
            'lastname' => 'Radcliffe',
            'born' => 'July 23, 1989 in Fulham, London, England, UK',
            'bio' => 'Daniel Jacob Radcliffe was born on July 23, 1989 in Fulham, London, England, to casting agent Marcia Gresham (née Jacobson) and literary agent Alan Radcliffe. His father is from a Northern Irish Protestant background, while his mother was born in South Africa, to a Jewish family (from Lithuania, Poland, Russia, and Germany). Daniel began performing in small school productions as a young boy. Soon enough, he landed a role in David Copperfield (1999), as the young David Copperfield.',
            'photo' => '/kMSMa5tR43TLMR14ahU1neFVytz.jpg',
            'awards' => '15 wins and 43 nominations'
        ));
        People::create(array(
            'firstname' => 'Ed',
            'lastname' => 'Solomon',
            'born' => ' September 15, 1960 in Saratoga, California, USA',
            'bio' => 'Ed Solomon was born on September 15, 1960 in Saratoga, California, USA as Edward James Solomon. He is a writer and producer, known for Men in Black (1997), Levity (2003) and Bill & Teds galna äventyr (1989). He was previously married to Cynthia Cleese.',
            'photo' => '/dfhHU0NT1mtEhfuPZgNSHe1N1lH.jpg',
            'awards' => '1 wins and 2 nominations'
        ));
        People::create(array(
            'firstname' => 'Jon',
            'lastname' => 'M. Chu',
            'born' => ' November 2, 1979 in Palo Alto, California, USA',
            'bio' => 'Jon is an alumni of the USC School of Cinema-Television. There, he won the Princess Grace Award, the Dore Schary Award presented by the Anti-Defamation league, the Jack Nicholson directing award, and recognized as an honoree for the IFP/West program Project: Involve.',
            'photo' => '/erDqr90tvAgme8Q9wSlneqiJ4MG.jpg',
            'awards' => '0 wins and 1 nominations'
        ));
        People::create(array(
            'firstname' => 'Tim',
            'lastname' => 'Roth',
            'born' => 'May 14, 1961 in London, England, UK',
            'bio' => 'Often mistaken for an American because of his skill at imitating accents, actor Tim Roth was born Timothy Simon Roth on May 14, 1961 in Lambeth, London, England. His mother, Ann, was a teacher and landscape painter. His father, Ernie, was a journalist who had changed the family name from "Smith" to "Roth"; Ernie was born in Brooklyn, New York, to an immigrant family of Irish ancestry.',
            'photo' => '/r4jtlboNqWPz2dOHafrPJE4Yd94.jpg',
            'awards' => '18 wins and 24 nominations'
        ));
        People::create(array(
            'firstname' => 'Amanda',
            'lastname' => 'Plummer ',
            'born' => ' March 23, 1957 in New York City, New York, USA',
            'bio' => 'The daughter of Canadian actor Christopher Plummer and American actress Tammy Grimes, Amanda Plummer was born in New York City on March 23, 1957. Her breakthrough role came when she starred opposite Robin Williams in Fisher King (1991). However, Plummer may be best remembered for her work in the Quentin Tarantino classic Pulp Fiction (1994). Tarantino wrote the parts of two robbers who hold up a restaurant specifically for Plummer and her partner-in-screen-crime Tim Roth. Since that stand-out role, Plummer has continued to appear in a wide variety of films, including The Prophecy (1995), Freeway (1996), and Mitt liv utan mig (2003).',
            'photo' => '/uICpVUj29yBcwCEGVZzE77FL98W.jpg',
            'awards' => '7 wins and 12 nominations'
        ));
        People::create(array(
            'firstname' => 'Laura',
            'lastname' => 'Lovelace',
            'bio' => 'Laura Lovelace is an actress and director, known for Pulp Fiction (1994), Jackie Brown (1997) and Vegetables (1989).',
            'photo' => '/aTTlFZLFdcAOfMBRqWzsZM8lpTM.jpg'
        ));
        People::create(array(
            'firstname' => 'John',
            'lastname' => 'Travolta ',
            'born' => ' February 18, 1954 in Englewood, New Jersey, USA',
            'bio' => 'John Joseph Travolta was born in Englewood, New Jersey, one of six children of Helen Travolta (née Helen Cecilia Burke) and Salvatore/Samuel J. Travolta. His father was of Italian descent and his mother was of Irish ancestry. His father owned a tire repair shop called Travolta Tires in Hillsdale, NJ. Travolta started acting appearing in a local production of "Who\'ll Save the Plowboy?". His mother, herself an actress and dancer, enrolled him in a drama school in New York, where he studied voice, dancing and acting. He decided to combine all three of these skills and become a musical comedy performer. ',
            'photo' => '/ns8uZHEHzV18ifqA9secv8c2Ard.jpg',
            'awards' => ' 52 wins and 57 nominations'
        ));
        People::create(array(
            'firstname' => 'Samuel',
            'lastname' => 'L. Jackson',
            'born' => 'December 21, 1948 in Washington, District of Columbia, USA',
            'bio' => 'Samuel L. Jackson is an American producer and highly prolific actor, having appeared in over 100 films, including Die Hard - Hämningslöst (1995), Unbreakable (2000), Shaft (2000), The 51st State (2001), Black Snake Moan (2006), Snakes on a Plane (2006), and the Star Wars prequel trilogy (1999-2005), as well as the Marvel Cinematic Universe.',
            'photo' => '/jyFUkDAP0XXHQDsDhufZWZG25y.jpg',
            'awards' => '36 wins and 82 nominations'
        ));
        People::create(array(
            'firstname' => 'Quentin',
            'lastname' => 'Tarantino',
            'born' => 'March 27, 1963 in Knoxville, Tennessee, USA',
            'bio' => 'Quentin Jerome Tarantino was born in Knoxville, Tennessee. His father, Tony Tarantino, is an Italian-American actor and musician from New York, and his mother, Connie (McHugh), is a nurse from Tennessee. Quentin moved with his mother to Torrance, California, when he was four years old.',
            'photo' => '/9ci4NBvHXJktxjALdJsrtasqgtV.jpg',
            'awards' => '132 wins and 176 nominations'
        ));
        People::create(array(
            'firstname' => 'Roger',
            'lastname' => 'Avary',
            'born' => 'August 23, 1965 in Flin Flon, Manitoba, Canada',
            'bio' => 'Award-winning filmmaker Roger Avary first began experimenting in Beta I video and 8mm film formats during the late 1970s. In 1983, his Super-8mm supernatural thriller The Worm Turns won Best Film from the Los Angeles Film Teachers Association Film Expo. He went on to attend the Pasadena Art Center College of Design\'s prestigious film program alongside fellow directors Michael Bay and Tarsem Singh.',
            'photo' => '/x9E17YQVlzKoRU8E4SEoEOwRKay.jpg',
            'awards' => '13 wins and 2 nominations'
        ));
        People::create(array(
            'firstname' => 'Kurt',
            'lastname' => 'Russell',
            'born' => 'March 17, 1951 in Springfield, Massachusetts, USA',
            'bio' => 'Kurt Russell was born Kurt Vogel Russell in Springfield, Massachusetts, to Louise Julia (Crone), a dancer, and actor Bing Russell (Neil Oliver Russell). He is of English, German, Scottish and Irish descent. His first roles were as a child on television series, including a lead role on the Western series The Travels of Jaimie McPheeters (1963). Russell landed a role in the Elvis Presley movie, Hjärta till salu! (1963), when he was eleven years old. Walt Disney himself signed Russell to a 10-year contract, and, according to Robert Osborne, he became the studio\'s top star of the 1970s. Having voiced adult Copper in the animated Disney film Micke och Molle - Vänner när det gäller (1981), Russell is one of the few famous child stars in Hollywood who has been able to continue his acting career past his teen years.',
            'photo' => '/rlnFuNkisPpuypARI7QaGCmOY6V.jpg',
            'awards' => '6 wins and 12 nominations'
        ));
        People::create(array(
            'firstname' => 'Jennifer',
            'lastname' => 'Jason Leigh',
            'born' => '26 wins and 62 nominations',
            'bio' => 'Jennifer Jason Leigh was born Jennifer Lee Morrow in Los Angeles, California, the daughter of writer Barbara Turner and actor Vic Morrow. Her father was of Russian Jewish descent and her mother was of Austrian Jewish ancestry. She is the sister of Carrie Ann Morrow and half-sister of actress Mina Badie.',
            'photo' => '/tncFH9YfrK2ql1cNXGEkEAJ5zIz.jpg',
            'awards' => 'February 5, 1962 in Hollywood, Los Angeles, California, USA'
        ));
        People::create(array(
            'firstname' => 'Walton',
            'lastname' => 'Goggins',
            'born' => ' November 10, 1971 in Birmingham, Alabama, USA',
            'bio' => 'In the past few years, Walton Goggins has had pivotal roles in films by two of Hollywood\'s most important auteurs: Quentin Tarantino and Steven Spielberg. His integral role as \'Chris Mannix,\' a southern renegade who claims to be the new sheriff of Red Rock in Tarantino\'s THE HATEFUL EIGHT, marks his second collaboration with the Academy Award-winning writer/director. He previously played slave fight trainer \'Billy Crash\' in Tarantino\'s 2012 DJANGO UNCHAINED. That same year, Goggins also appeared in Steven Spielberg\'s LINCOLN, where he portrayed Congressman \'Wells A. Hutchins.\'',
            'photo' => '/gA5nf2alzIPPjs1MSjS1PmrCedJ.jpg',
            'awards' => '4 wins and 28 nominations'
        ));
        People::create(array(
            'firstname' => 'Demián',
            'lastname' => 'Bichir',
            'born' => 'August 1, 1963 in Mexico City, Distrito Federal, Mexico',
            'bio' => 'Demián Bichir Najera was born in Mexico City, Mexico, to Maricruz Nájera (María de la Cruz Nájera Botello), an actress, and Alejandro Bichir (Alejandro Bichir Batres), a theatre director. His parents met in the theatre. He has two brothers who are also actors, Bruno Bichir and Odiseo Bichir. Demián began acting, at age 3 at the Palace of Fine Arts in his native Mexico City. He became a member of the National Theater Company of Mexico at age 13 and acted in several plays directed by renowned international masters such as José Tamayo, Clifford Williams and José Quintero. He starred in the Spanish versions of Ah! Wilderness, Equus, Broadway Bound, The Ghost Sonata and Malcolm VS the eunuchs. He made his Amrican stage debut in By the waters of Babylon at the Geffen Play House in Los Angeles.',
            'photo' => '/hIldnp3pj3LeDq1rVfGgVy4a7cT.jpg',
            'awards' => '8 wins and 16 nominations'
        ));
        People::create(array(
            'firstname' => 'Adrian',
            'lastname' => 'Quinton',
            'bio' => 'Adrian Quinton is an actor, known for Kingsman: The Secret Service (2014), Walking on Sunshine (2014) and Boy Story (2016).'
            
        ));
        People::create(array(
            'firstname' => 'Colin',
            'lastname' => 'Firth',
            'born' => 'September 10, 1960 in Grayshott, Hampshire, England, UK',
            'bio' => 'Colin Andrew Firth was born into an academic family in Grayshott, Hampshire, England. His mother, Shirley Jean (Rolles), was a comparative religion lecturer at the Open University, and his father, David Norman Lewis Firth, lectured on history at Winchester University College (formerly King Alfred\'s College) in Winchester, and worked on education for the Nigerian government. His grandparents were missionaries. His siblings Katie Firth and Jonathan Firth are also actors.',
            'photo' => '/lKUq407IhFF6CQoJbUgbEyfS9JA.jpg',
            'awards' => '67 wins and 55 nominations'
        ));
        People::create(array(
            'firstname' => 'Mark',
            'lastname' => 'Strong',
            'born' => 'August 5, 1963 in Islington, London, England, UK',
            'bio' => 'British actor Mark Strong, who played Jim Prideaux in the 2011 remake of Tinker Tailor Soldier Spy (2011), is often cast as cold, calculating villains. But before he became a famous actor, he intended to pursue a career in law. Strong was born Marco Giuseppe Salussolia in London, England, to an Austrian mother and an Italian father. His father left the family not long after he was born, and his mother worked as an au pair to raise the boy on her own. Strong\'s mother had his name legally changed when he was young in order to help him better assimilate with his peers.',
            'photo' => '/svq7VWJqKN4Fq8ZJK1Yd8W711rn.jpg',
            'awards' => '3 wins and 7 nominations'
        ));
        People::create(array(
            'firstname' => 'Jonno',
            'lastname' => 'Davies',
            'born' => ' July 17, 1992 in Chesterfield, Derbyshire, England, UK',
            'bio' => 'Jonno Davies is an actor, known for Spotless (2015), Kingsman: The Secret Service (2014), Hollyoaks (1995), Casualty (1986), In the Name of Ben Hur (2016), The Killing of Ada May and Doctors (2000).',
            'photo' => '/cNIv1FYHNy0yFNpgn5pwXP8X0Jz.jpg'
        ));
        People::create(array(
            'firstname' => 'Jack',
            'lastname' => 'Davenport',
            'born' => 'March 1, 1973 in Suffolk, England, UK',
            'bio' => 'Jack Davenport was born in 1973 and is the son of actors Maria Aitken and Nigel Davenport. He studied Literature and Film Studies at the University of East Anglia. His first break happened after he wrote to John Cleese to ask to be a runner on Otäcka odjur (1997) where he ended up playing a zoo keeper. His first major role however was that of public school educated barrister Miles in the BBC television series Livet kan börja (1996). Recent projects include the stylish Ultraviolet (1998) where he played a modern-day vampire hunter, The Talented Mr. Ripley (1999) as Matt Damon\'s love interest, and Pirates of the Caribbean: Svarta Pärlans förbannelse (2003) as the Keira Knightley\'s intended mate.',
            'photo' => '/qxM6XdLmZ6pKkQV7uVwgu7MLcfV.jpg',
            'awards' => '1 wins and 0 nominations'
        ));
        People::create(array(
            'firstname' => 'Jane',
            'lastname' => 'Goldman',
            'born' => 'June 11, 1970 in England, UK',
            'bio' => 'Jane Goldman was born on June 11, 1970 in England. She is a producer and writer, known for Kick-Ass (2010), Kingsman: The Secret Service (2014) and Stardust (2007). She has been married to Jonathan Ross since August 1988. They have three children.',
            'photo' => '/4a1dXBKrPR3kLIcXvIbgS2eJb1Z.jpg',
            'awards' => '2 wins and 5 nominations'
        ));
        People::create(array(
            'firstname' => 'Matthew',
            'lastname' => 'Vaughn',
            'born' => 'March 7, 1971 in London, England, UK',
            'bio' => 'Matthew Vaughn is an English film producer and director. He is known for producing such films as Lock, Stock and Two Smoking Barrels (1998) and Snatch (2000) and for directing the crime thriller, Layer Cake (2004), the fantasy epic, Stardust (2007), the superhero comedy, Kick-Ass (2010), and the superhero film, X-Men: First Class (2011). Vaughn was educated at Stowe School in Buckingham, England. Taking a gap year between Stowe and university, he traveled the world on a Hard Rock Cafe tour and landed in Los Angeles, U.S. Here, he began working as an assistant to a director. He returned to London, attending University College London where he studied anthropology and ancient history. ',
            'photo' => '/Dnbz3B7yy4u0abixuD5LakZgsy.jpg',
            'awards' => '5 wins and 18 nominations'
        ));
        People::create(array(
            'firstname' => 'Jamie',
            'lastname' => 'Foxx',
            'born' => 'December 13, 1967 in Terrell, Texas, USA',
            'bio' => 'Jamie Foxx is an American actor, singer and comedian. He won an Academy Award for Best Actor, BAFTA Award for Best Actor in a Leading Role, and Golden Globe Award for Best Actor in a Musical or Comedy, for his work in the biographical film Ray (2004). The same year, he was nominated for the Academy Award for Best Supporting Actor for his role in the action film Collateral (2004). Other prominent acting roles include the title role in the film Django Unchained (2012), the supervillain Electro in The Amazing Spider-Man 2 (2014), and William Stacks in the modern version of Annie (2014).',
            'photo' => '/cDRGXCNrwf1p9jouw9GzhU2vWP7.jpg',
            'awards' => '46 wins and 76 nominations'
        ));   
        People::create(array(
            'firstname' => 'Christoph',
            'lastname' => 'Waltz',
            'born' => 'October 4, 1956 in Vienna, Austria',
            'bio' => 'Christoph Waltz is an Austrian-German actor. He is known for his works with American filmmaker Quentin Tarantino, receiving acclaim for portraying SS-Standartenführer Hans Landa in Inglourious Basterds (2009) and bounty hunter Dr. King Schultz in Django Unchained (2012). For each performance, he won an Academy Award, a BAFTA Award, and a Golden Globe Award for Best Supporting Actor. Additionally, he received the Best Actor Award at the Cannes Film Festival and a Screen Actors Guild Award for his portrayal of Landa.',
            'photo' => '/bPtNS4p3CEDt3Uo9khMCLyQUa0W.jpg',
            'awards' => '84 wins and 40 nominations'
        ));
        People::create(array(
            'firstname' => 'Leonardo',
            'lastname' => 'DiCaprio',
            'born' => ' November 11, 1974 in Hollywood, Los Angeles, California, USA',
            'bio' => 'Few actors in the world have had a career quite as diverse as Leonardo DiCaprio\'s. DiCaprio has gone from relatively humble beginnings, as a supporting cast member of the sitcom Pappa vet bäst (1985) and low budget horror movies, such as Critters 3 (1991), to a major teenage heartthrob in the 1990s, as the hunky lead actor in movies such as Romeo & Julia (1996) and Titanic (1997), to then become a leading man in Hollywood blockbusters, made by internationally renowned directors such as Martin Scorsese and Christopher Nolan.',
            'photo' => '/jToSMocaCaS5YnuOJVqQ7S7pr4Q.jpg',
            'awards' => '97 wins and 209 nominations'
        ));
        People::create(array(
            'firstname' => 'Kerry',
            'lastname' => 'Washington ',
            'born' => 'January 31, 1977 in The Bronx, New York City, New York, USA',
            'bio' => 'Kerry Washington was born on January 31, 1977 in The Bronx, New York City, New York, USA as Kerry Marisa Washington. She is an actress and producer, known for Scandal (2012), Django Unchained (2012) and Save the Last Dance (2001). She has been married to Nnamdi Asomugha since June 24, 2013. They have two children.',
            'photo' => '/yufNCkn9YuYei9ThzSgApczUe4K.jpg',
            'awards' => '7 wins and 54 nominations'
        ));
        People::create(array(
            'firstname' => 'Scott',
            'lastname' => 'Grimes',
            'born' => 'July 9, 1971 in Lowell, Massachusetts, USA',
            'bio' => 'Scott Grimes was born on July 9, 1971 in Lowell, Massachusetts, USA as Scott Richard Grimes. He is an actor, known for Critters (1986), Robin Hood (2010) and Mystery, Alaska (1999). He has been married to Megan Moore since December 2011. He was previously married to Dawn Bailey.',
            'photo' => '/tm8uz3DbD0hlXRciYgCuaHrXepl.jpg',
            'awards' => '0 wins and 8 nominations'
        ));
        People::create(array(
            'firstname' => 'Damian',
            'lastname' => 'Lewis',
            'born' => 'February 11, 1971 in St. John\'s Wood, London, England, UK',
            'bio' => 'Damian Lewis was born on February 11, 1971, in St. John\'s Wood, London, England, to Charlotte Mary (Bowater), from an upper-class background, and J. Watcyn Lewis, a city broker whose own parents were Welsh. He was raised on Abbey Road in London until the age of 8 with his siblings Gareth, William, and Amanda',
            'photo' => '/2RcaC1ictETsTU4ioFlQ32zGYYg.jpg',
            'awards' => '5 wins and 28 nominations'
        ));
        People::create(array(
            'firstname' => 'Mark',
            'lastname' => 'Huberman',
            'bio' => 'Mark Huberman is an actor, known for Frank (2014), Band of Brothers (2001) and Boy Eats Girl (2005).',
            'photo' => '/1qxKNlmkxC6gX8n79xX9llez3oo.jpg'
        ));
        People::create(array(
            'firstname' => 'Douglas',
            'lastname' => 'Spain',
            'born' => 'April 15, 1974 in Los Angeles, California, USA',
            'bio' => 'Douglas Spain captured critical praise and a 1998 Independent Spirit Award nomination for his feature film debut in Fox Searchlight\'s "Star Maps." The film, which premiered at the Sundance Film Festival, tells the dark-humored story of \'Carlos\' (Spain), whose route to realizing his dreams of acting leads him to selling maps to the stars\' homes as well as himself on the streets of Los Angeles. Spain appeared in HBO\'s "Walkout" directed by Edward James Olmos as well as "The Reading Room" opposite James Earl Jones for the Hallmark Channel.',
            'photo' => '/4WgW1tcO06dC3Wnmr4qsjajovQI.jpg',
            'awards' => '7 wins and 2 nominations'
        ));
        People::create(array(
            'firstname' => 'Ron',
            'lastname' => 'Livingston',
            'born' => 'June 5, 1967 in Cedar Rapids, Iowa, USA',
            'bio' => 'Ronald Joseph Livingston was born on June 5, 1967 in Cedar Rapids, Iowa, to Linda (Rinas), a Lutheran pastor, and Kurt Livingston, an aerospace engineer. His younger brother, John Livingston, is also an actor, his sister, Jennifer Livingston, is a TV news personality at CBS/WKBT in La Crosse, Wisconsin, and his youngest brother, Nick Livingston, is a student. He is of German, and smaller amounts of Welsh, Scottish, and English, ancestry.',
            'photo' => '/AjR0aCaDOK6S38I8ziICgVbxH5I.jpg',
            'awards' => '0 wins and 3 nominations'
        ));
        People::create(array(
            'firstname' => 'David',
            'lastname' => 'Frankel',
            'born' => 'April 2, 1959 in New York City, New York, USA',
            'bio' => 'David Frankel was born on April 2, 1959 in New York City, New York, USA. He is a producer and director, known for Djävulen bär Prada (2006), One Chance (2013) and Band of Brothers (2001).',
            'photo' => '/tpLjh5skSSRdm70dbRocPaBZj33.jpg',
            'awards' => '7 wins and 6 nominations'
        ));
        People::create(array(
            'firstname' => 'Stephen',
            'lastname' => 'Ambrose',
            'born' => 'January 10, 1936 in Decatur, Illinois, USA',
            'bio' => 'America\'s preeminent military historian, Stephen E. Ambrose is the author of numerous bestselling books about World War II, including D-Day, Citizen Soldiers and The Victors, plus biographies of Dwight D. Eisenhower and Richard Nixon. He is the founder of the Eisenhower Center and President of the National D-Day Museum in New Orleans',
            'awards' => '2 wins and 0 nominations'
        ));
        People::create(array(
            'firstname' => 'David',
            'lastname' => 'Attenborough',
            'born' => 'May 8, 1926 in London, England, UK',
            'bio' => 'Born 8 May 1926, the younger brother of actor Lord Richard Attenborough. He never expressed a wish to act and, instead, studied Natural Sciences at Cambridge University, graduating in 1947, the year he began his two years National Service in the Royal Navy. In 1952, he joined BBC Television at Alexandra Palace and, in 1954, began his famous "Zoo Quest" series. When not "Zoo Questing", he presented political broadcasts, archaeological quizzes, short stories, gardening and religious programmes.',
            'photo' => '/6BWFHWHSXwMNPRoDLn80er3Xfzx.jpg',
            'awards' => '17 wins and 7 nominations'
        ));
        People::create(array(
            'firstname' => 'David',
            'lastname' => 'Fincher',
            'born' => 'August 28, 1962 in Denver, Colorado, USA',
            'bio' => 'David Fincher was born in 1962 in Denver, Colorado, and was raised in Marin County, California. When he was 18 years old he went to work for John Korty at Korty Films in Mill Valley. He subsequently worked at ILM (Industrial Light and Magic) from 1981-1983.',
            'photo' => '/dcBHejOsKvzVZVozWJAPzYthb8X.jpg',
            'awards' => '62 wins and 112 nominations'
        ));
        People::create(array(
            'firstname' => 'Justin',
            'lastname' => 'Anderson',
            'bio' => 'Justin Anderson is known for his work on Planet Earth II (2016), Nature\'s Great Events (2009) and Planet Earth (2006)'
        ));

        People::create(array(
            'firstname' => 'Francesca',
            'lastname' => 'Comencini',
            'born' => 'August 19, 1961 in Rome, Lazio, Italy',
            'bio' => 'A philosophy student, she quit University after two years, and moved to France in 1982. Although she was planning to be a writer, she brought to the screen instead an autobiographical story with Pianoforte (1984): the film won the De Sica Award at the Venice Film Festival and was invited to other International Festivals.',
            'awards' => '13 wins and 11 nominations'
        ));

        People::create(array(
            'firstname' => 'Leonardo',
            'lastname' => 'Fasoli',
            'bio' => 'Leonardo Fasoli is a writer and assistant director, known for Gomorrah (2014), Maltese - Il Romanzo del Commissario (2017) and A Judge of Honour (2004).',
            'awards' => '2 wins and 3 nominations'
        ));

        People::create(array(
            'firstname' => 'Marco',
            'lastname' => 'D\'Amore',
            'born' => 'June 12, 1981 in Caserta, Campania, Italy',
            'bio' => 'Marco D\'Amore was born on June 12, 1981 in Caserta, Campania, Italy. He is an actor and writer, known for Gomorrah (2014), Un posto sicuro (2015) and A Quiet Life (2010).',
            'photo' => '/5XcpQyl2ftohM1ZmtOa7ooVMyVv.jpg',
            'awards' => '3 wins and 1 nominations'
        ));

        People::create(array(
            'firstname' => 'Salvatore',
            'lastname' => 'Esposito',
            'born' => 'February 2, 1986 in Naples, Campania, Italy',
            'bio' => 'Salvatore Esposito was born on February 2, 1986 in Naples, Campania, Italy. He is an actor, known for Gomorrah (2014), They Call Me Jeeg (2015) and Taxi 5 (2018).',
            'photo' => '/fPjgHTSQZj1jjYs4TTqyYcN9PYq.jpg'
        ));

        People::create(array(
            'firstname' => 'Fortunato',
            'lastname' => 'Cerlino',
            'born' => 'June 17, 1971 in Naples, Campania, Italy',
            'bio' => 'Fortunato Cerlino was born on June 17, 1971 in Naples, Campania, Italy. He is an actor, known for Inferno (2016), Gomorrah (2014) and Gomorrah (2008).',
            'photo' => '/ktBGAqt5lieVFNu1myG0tJg1G3d.jpg'
        ));

        People::create(array(
            'firstname' => 'Cristina',
            'lastname' => 'Donadio',
            'born' => 'November 7, 1954 in Naples, Campania, Italy',
            'bio' => 'Cristina Donadio was born on November 7, 1954 in Naples, Campania, Italy. She is an actress, known for Libera (1993), Savage Breed (1980) and Gomorrah (2014).',
            'photo' => '/r0duEvQQBL1LwY7jK8oChG4MIcP.jpg',
            'awards' => '2 nominations'
        ));

        People::create(array(
            'firstname' => 'Fabio',
            'lastname' => 'De Caro',
            'born' => 'June, 1974 in Naples, Campania, Italy',
            'bio' => 'Fabio De Caro was born in June 1974 in Naples, Campania, Italy. He is an actor, known for Gomorrah (2014), A.C.A.B. (2012) and Era giovane e aveva gli occhi chiari (2017).',
            'photo' => '/xZAk598Y1WiZGsSnKqfuoAuZIHw.jpg'
        ));

    }
}
