<?php

use Illuminate\Database\Seeder;
use App\Review;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->delete();

        Review::create(array(
            'user_id' => 1,
            'user_name' => 'Laravel_master',
            'title' => 'A family film',
            'body' => 'Like a defibrillator cranked up to the highest possible voltage, Rossini\'s William Tell Overture is slapped on to this film twice – at first briefly, then for a while. It results in something that isn\'t exactly a gallop, more like the protracted convulsive thrashings of a dead horse with its hoof jammed in the electric socket. Hearing the theme is always enjoyable (specifically, the Overture\'s fourth \"Finale\" movement), and maybe it\'s as well to reassert a wholesome association with the Lone Ranger, his horse, Silver, and his trusty guide, Tonto – and get away from the thought of Malcolm McDowell having sped-up sex with two women in Kubrick\'s A Clockwork Orange. But the energy, brio and brevity of that musical signature is in mighty contrast to this fantastically mediocre and long film, starring Armie Hammer as the masked Ranger himself and Johnny Depp as Tonto, produced by Jerry Bruckheimer and directed by Gore Verbinski, the men who gave us Pirates of the Caribbean.',
            'status' => 1,
            'reviewable_id' => 1,
            'reviewable_type' => 'movies'
        ));
        Review::create(array(
            'user_id' => 1,
            'user_name' => 'Laravel_master',
            'title' => 'Sorkin and Fincher combine the excitement with a dark, insistent kind of pessimism. Smart work.',
            'body' => 'From the first sentence, the first word, the first nervily in-drawn breath, this compulsively watchable picture announces itself as the unmistakable work of Aaron Sorkin. His whip-smart, mile-a-minute dialogue made The West Wing deeply addictive on TV, and after uncertain works such as Charlie Wilson\'s War and the strange, small-screen drama Studio 60 on the Sunset Strip – in which Sorkin\'s distinctive, faintly martyred seriousness was bafflingly applied to the backstage shenanigans of a fictional television comedy – this writer is triumphantly back on form. He\'s found an almost perfect subject: the creation of the networking website Facebook, and the backstabbing legal row among the various nerds, geeks, brainiacs and maniacs about who gets the credit and the cash.',
            'status' => 1,
            'reviewable_id' => 2,
            'reviewable_type' => 'movies'
        ));
        Review::create(array(
            'user_id' => 1,
            'user_name' => 'Laravel_master',
            'title' => 'Blades isn\'t quite as funny as Zoolander or Dodgeball, but it deserves a solid score from the judges.',
            'body' => 'Fratpack comics Jon Heder and Will Ferrell have had some dodgy outings in the past year with, respectively, a terrible School For Scoundrels remake and a piece of sub-Kaufman noodling called Stranger Than Fiction. It\'s a relief to see them back in this serviceably funny underdog sports movie - the kind of thing that suits them best, or suits Ferrell best, at any rate: big, broad, elaborately detailed comedy characters in the Saturday Night Live tradition. They play egomaniac rivals in the narcissistic world of men\'s figure skating, an arena of sparkly spandex costumes on the ice and foot-stamping tantrums and seething resentments backstage. Heder is Jimmy MacElroy, an absurdly vain peacock of a skater with a figure-hugging, powder-blue outfit and blowdried blond hair. He has an appallingly affected routine that involves imitating a peacock on the ice and finally releasing a dove, somehow secreted within his skin-tight getup. His hated enemy is Chazz Michael Michaels, played by the permanently sweaty Ferrell: a skater with a James Brown hairdo and a sensual beergut, who insists on his own brash brand of bad-boy heterosexuality. He is proud of the fact that he is the only skater to have won Olympic medals and adult movie awards. The two titans of skating fatefully meet when they are forced to share the gold medal position on the podium at the Stockholm championships.',
            'status' => 1,
            'reviewable_id' => 3,
            'reviewable_type' => 'movies'
        ));
        Review::create(array(
            'user_id' => 2,
            'user_name' => 'The_Engine',
            'title' => 'One of the big stories of our time',
            'body' => 'For a director who customarily tackles subjects with the approach of a gorilla playing American football, Oliver Stone’s take on whistleblower Edward Snowden seems curiously muted. Audiences who are already familiar with Citizenfour, Laura Poitras’s exemplary documentary on the same subject, will be struck by the fact that, in dramatising Snowden\’s story, Stone seems to have leached out much of the drama. The aim was clearly to create an All the President\’s Men for the age of cyber-surveillance. But somehow the sense of peril is downplayed, diluted by too much inert exposition and pacing that could be tighter. Playing Edward Snowden, Joseph Gordon-Levitt is one of the film\’s main assets. His character\’s ferocious intelligence is signposted with cheap details – he is forever fiddling with a Rubik\’s cube and has a nerd\’s enthusiasm for arcane enciphering equipment. But Snowden\’s intellect is most effectively conveyed in Gordon-Levitt\’s eyes – watchful, sober and clouded by doubt, they are a window into his impossible ethical quandary.',
            'status' => 1,
            'reviewable_id' => 4,
            'reviewable_type' => 'movies'
        ));
        Review::create(array(
            'user_id' => 2,
            'user_name' => 'The_Engine',
            'title' => 'One of the big stories of our time',
            'body' => 'For a director who customarily tackles subjects with the approach of a gorilla playing American football, Oliver Stone’s take on whistleblower Edward Snowden seems curiously muted. Audiences who are already familiar with Citizenfour, Laura Poitras’s exemplary documentary on the same subject, will be struck by the fact that, in dramatising Snowden\’s story, Stone seems to have leached out much of the drama. The aim was clearly to create an All the President\’s Men for the age of cyber-surveillance. But somehow the sense of peril is downplayed, diluted by too much inert exposition and pacing that could be tighter. Playing Edward Snowden, Joseph Gordon-Levitt is one of the film\’s main assets. His character\’s ferocious intelligence is signposted with cheap details – he is forever fiddling with a Rubik\’s cube and has a nerd\’s enthusiasm for arcane enciphering equipment. But Snowden\’s intellect is most effectively conveyed in Gordon-Levitt\’s eyes – watchful, sober and clouded by doubt, they are a window into his impossible ethical quandary.',
            'status' => 1,
            'reviewable_id' => 5,
            'reviewable_type' => 'movies'
        ));
        Review::create(array(
            'user_id' => 2,
            'user_name' => 'The_Engine',
            'title' => 'Sorkin and Fincher combine the excitement with a dark, insistent kind of pessimism. Smart work.',
            'body' => 'From the first sentence, the first word, the first nervily in-drawn breath, this compulsively watchable picture announces itself as the unmistakable work of Aaron Sorkin. His whip-smart, mile-a-minute dialogue made The West Wing deeply addictive on TV, and after uncertain works such as Charlie Wilson\'s War and the strange, small-screen drama Studio 60 on the Sunset Strip – in which Sorkin\'s distinctive, faintly martyred seriousness was bafflingly applied to the backstage shenanigans of a fictional television comedy – this writer is triumphantly back on form. He\'s found an almost perfect subject: the creation of the networking website Facebook, and the backstabbing legal row among the various nerds, geeks, brainiacs and maniacs about who gets the credit and the cash.',
            'status' => 1,
            'reviewable_id' => 6,
            'reviewable_type' => 'movies'
        ));
        Review::create(array(
            'user_id' => 3,
            'user_name' => 'Mood_Swing',
            'title' => 'Blades isn\'t quite as funny as Zoolander or Dodgeball, but it deserves a solid score from the judges.',
            'body' => 'Fratpack comics Jon Heder and Will Ferrell have had some dodgy outings in the past year with, respectively, a terrible School For Scoundrels remake and a piece of sub-Kaufman noodling called Stranger Than Fiction. It\'s a relief to see them back in this serviceably funny underdog sports movie - the kind of thing that suits them best, or suits Ferrell best, at any rate: big, broad, elaborately detailed comedy characters in the Saturday Night Live tradition. They play egomaniac rivals in the narcissistic world of men\'s figure skating, an arena of sparkly spandex costumes on the ice and foot-stamping tantrums and seething resentments backstage. Heder is Jimmy MacElroy, an absurdly vain peacock of a skater with a figure-hugging, powder-blue outfit and blowdried blond hair. He has an appallingly affected routine that involves imitating a peacock on the ice and finally releasing a dove, somehow secreted within his skin-tight getup. His hated enemy is Chazz Michael Michaels, played by the permanently sweaty Ferrell: a skater with a James Brown hairdo and a sensual beergut, who insists on his own brash brand of bad-boy heterosexuality. He is proud of the fact that he is the only skater to have won Olympic medals and adult movie awards. The two titans of skating fatefully meet when they are forced to share the gold medal position on the podium at the Stockholm championships.',
            'status' => 1,
            'reviewable_id' => 7,
            'reviewable_type' => 'movies'
        ));
        Review::create(array(
            'user_id' => 3,
            'user_name' => 'Mood_Swing',
            'title' => 'A family film',
            'body' => 'Like a defibrillator cranked up to the highest possible voltage, Rossini\'s William Tell Overture is slapped on to this film twice – at first briefly, then for a while. It results in something that isn\'t exactly a gallop, more like the protracted convulsive thrashings of a dead horse with its hoof jammed in the electric socket. Hearing the theme is always enjoyable (specifically, the Overture\'s fourth \"Finale\" movement), and maybe it\'s as well to reassert a wholesome association with the Lone Ranger, his horse, Silver, and his trusty guide, Tonto – and get away from the thought of Malcolm McDowell having sped-up sex with two women in Kubrick\'s A Clockwork Orange. But the energy, brio and brevity of that musical signature is in mighty contrast to this fantastically mediocre and long film, starring Armie Hammer as the masked Ranger himself and Johnny Depp as Tonto, produced by Jerry Bruckheimer and directed by Gore Verbinski, the men who gave us Pirates of the Caribbean.',
            'status' => 1,
            'reviewable_id' => 8,
            'reviewable_type' => 'movies'
        ));
    }
}
        