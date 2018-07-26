<?php

use Illuminate\Database\Seeder;

class ActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actions')->insert([
          'action_name'=>'Nettoyage de la plage de Tatouine',
          'action_desc'=>'L\'association Bidule Chouette en partenariat avec les gardes cotes de Machin Chose vous proposent une action de sensibilisation à la problématique des déchets aquatiques suivie d\'une récolte sur la plage des Chevrêts et des Mites. Rendez-vous à 18h parking Truc bidule Chyouette.

            Pour plus d\'information contactez : Mme bidule
            à bidule@machin.com',
          'action_type'=>'environnement',
          'request_company_id'=>'1',
          'action_begin'=>'2018-09-08',
          'action_end'=>'2018-09-10',
          'action_location'=>'Tatouine'
        ],
        [
          'action_name'=>'Collecte Alimentaire sur Chandrila',
          'action_desc'=>"All right, move it! I said move it! Go on! Hello! I say, over there! Were you looking for me? Bring those two down here! Let's go! Well, they're on their way. Artoo, are you sure this was a good idea? Freeze! Don't move! We surrender. Ohhh! Stand back, Artoo. The code's changed. We need Artoo! Here's the terminal. Artoo, where are you? We need you at the bunker right away. Going? What do you mean, you're going. But-- but going where, Artoo? No, what! Artoo! Oh, this is no time for heroics. Come back!

            The Emperor does not share your optimistic appraisal of the situation. But he asks the impossible. I need more men. Then perhaps you can tell him when he arrives. The Emperor's coming here? That is correct, Commander. And he is most displeased with your apparent lack of progress. We shall double our efforts. I hope so, Commander, for your sake. The Emperor is not as forgiving as I am.",
          'action_type'=>'sociale',
          'request_company_id'=>'2',
          'action_begin'=>'2018-09-09',
          'action_end'=>'2018-09-12',
          'action_location'=>'Chandrila'
        ],
        [
          'action_name'=>'Remise en état d\'un x-wing',
          'action_desc'=>"Leave that to me! Damn fool. I knew that you were going to say that! Who's the more foolish...the fool or the fool who follows him?

          Well, that's the trick, isn't it? And it's going to cost you something extra. Ten thousand in advance. Ten thousand? We could almost buy our own ship for that! But who's going to fly it, kid! You? You bet I could. I'm not such a bad pilot myself! We don't have to sit here and listen... We haven't that much with us. But we could pay you two thousand now, plus fifteen when we reach Alderaan. Seventeen, huh! Okay. You guys got yourself a ship. We'll leave as soon as you're ready. Docking bay Ninety-four. Ninety-four. Looks like somebody's beginning to take an interest in your handiwork. All right, we'll check it out.",
          'action_type'=>'civil',
          'request_company_id'=>'3',
          'action_begin'=>'2018-11-09',
          'action_end'=>'2018-11-12',
          'action_location'=>'Dagobah'
        ]
      );
    }
}
