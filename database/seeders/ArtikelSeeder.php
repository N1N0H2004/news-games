<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artikels = [
            [
                'titel' => 'Fortnite',
                'inhoud' => 'Dit is de inhoud over een artikel over Fortnite',
                'tag_id' => 1,
                'categorie_id' => 1,
                'game_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'titel' => 'Call Of Duty - Modern Warfare',
                'inhoud' => 'Dit is de inhoud over een artikel over Call of Duty',
                'tag_id' => 2,
                'categorie_id' => 2,
                'game_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'titel' => 'Minecraft has changed his whole game | New Features',
                'inhoud' => 'Dit is de inhoud over een artikel over Minecraft',
                'tag_id' => 3,
                'categorie_id' => 3,
                'game_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'titel' => 'Test artikel',
                'inhoud' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet tellus suscipit nibh luctus, sed hendrerit nunc tincidunt. Phasellus imperdiet massa sit amet erat aliquet tempus. Proin ornare lectus id odio volutpat, sit amet accumsan urna mattis. Duis in porttitor sem, a cursus diam. Maecenas varius eros at purus viverra vehicula. Pellentesque efficitur efficitur cursus. Donec elementum metus felis, vel pellentesque purus sollicitudin sed. Duis a sodales turpis. Aliquam sagittis maximus dignissim. Quisque tempus condimentum dui, eget venenatis elit vulputate eget. Pellentesque nec erat id nibh volutpat venenatis. Morbi vitae ultricies mauris. Vestibulum eleifend metus vitae lacus sagittis vulputate. Aliquam porttitor ac velit et venenatis. Donec ac bibendum neque. Donec venenatis massa laoreet, feugiat mi vitae, placerat augue.

                            Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed in facilisis sem, at faucibus nibh. In hac habitasse platea dictumst. Mauris quis nisl et lectus tincidunt posuere. Aliquam convallis nec elit nec rutrum. Sed a eros ligula. Sed quis ligula rutrum, egestas turpis quis, interdum metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur ac ligula dolor. Ut hendrerit mauris sit amet nunc elementum, in viverra sem volutpat. Donec mattis enim vitae mollis consectetur. Phasellus aliquam enim leo, at imperdiet neque porta quis. Nulla facilisi. Nullam pellentesque et tortor sit amet rutrum. Quisque nibh arcu, commodo eu ex nec, luctus dictum nibh.

                            Aliquam sit amet erat et magna pellentesque vestibulum. Donec porttitor sollicitudin dolor, tincidunt semper turpis venenatis eget. Suspendisse condimentum, dui ut egestas blandit, ante dolor auctor turpis, non sagittis nibh lorem sodales purus. Praesent ex ante, facilisis sit amet commodo non, interdum eget leo. Fusce at dignissim urna. In ornare et nisi sed laoreet. Phasellus a dapibus mi. Nullam ac pharetra nulla. Aliquam varius sapien quis orci lacinia euismod. Ut facilisis sapien nec varius condimentum. Maecenas a massa posuere, molestie lorem et, sagittis massa. Suspendisse vitae pellentesque augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam blandit, turpis nec tincidunt tempor, risus orci pellentesque ipsum, ut lacinia elit tortor vitae ex. Nulla eget tempus lectus, vitae elementum lacus. Pellentesque quis nulla at nibh finibus viverra.

                            Praesent eleifend ipsum vulputate quam maximus, sed condimentum mauris tempus. Nunc dapibus libero et elit commodo, et sodales diam finibus. Aenean hendrerit, lacus a fermentum vehicula, purus leo pharetra metus, eget dapibus nunc mauris vel quam. Donec consectetur, ante a maximus maximus, velit lorem pretium sapien, non lacinia ante mauris quis est. Quisque lobortis, risus a efficitur ornare, lorem est consectetur ligula, vel rutrum justo elit non neque. Maecenas varius ultricies ipsum, et hendrerit lacus consequat vitae. Nunc vehicula, arcu at ultricies auctor, est lectus posuere nunc, quis commodo est purus nec mauris. Quisque eu maximus justo. Quisque pharetra urna at enim ullamcorper, ac pulvinar metus luctus. Nunc tristique nulla eget eros faucibus, at facilisis ligula ornare. Phasellus justo diam, placerat egestas convallis nec, malesuada in justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi ex, eleifend.',
                'tag_id' => 3,
                'categorie_id' => 3,
                'game_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('artikels')->insert($artikels);
    }
}

