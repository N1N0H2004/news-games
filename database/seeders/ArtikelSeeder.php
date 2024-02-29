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
                'titel' => 'Fortnite has announced that there is a new season | Season 7',
                'inhoud' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus convallis urna, vel feugiat augue ultrices eget. Sed convallis leo a nisi scelerisque commodo. Aenean ullamcorper consequat ante ut mattis. Duis blandit justo at facilisis ullamcorper. Etiam ante tellus, commodo eu neque sodales, viverra tempor lacus. Aenean vel bibendum nisl. Duis accumsan porta lectus, vitae hendrerit tortor tincidunt ornare. Cras auctor commodo ex, nec finibus ligula tincidunt eget. Vivamus vehicula quam commodo faucibus aliquet. Proin porttitor commodo aliquet. Morbi non dui hendrerit, finibus sem vitae, ultricies erat. Nulla ultricies neque leo, id mattis odio tristique nec. Etiam fermentum condimentum quam, elementum tincidunt lectus hendrerit non. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse potenti.

                             Suspendisse tincidunt egestas lacus, eget tincidunt nisl placerat eu. Duis consectetur libero in dapibus vulputate. Suspendisse scelerisque posuere lorem et imperdiet. Ut eget magna id urna hendrerit porttitor at eu lacus. Donec quis nisl vel sem fermentum euismod in cursus ligula. Cras venenatis turpis sit amet leo commodo, id ornare dolor posuere. Praesent tincidunt leo nibh, ac sollicitudin libero aliquet a. Maecenas luctus mi in turpis elementum aliquet. Etiam ultricies arcu pharetra libero rutrum, aliquam porttitor elit consectetur.',
                'tag_id' => 1,
                'categorie_id' => 1,
                'game_id' => 1,
                'photo_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'titel' => 'Call Of Duty announced his new game | Modern Warfare|V',
                'inhoud' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu erat sit amet urna lobortis elementum. Nam cursus, est nec fermentum rutrum, nunc arcu congue mi, quis elementum dolor justo eget ante. Suspendisse potenti. Maecenas vitae viverra mi. Aenean euismod, lectus in faucibus mattis, erat turpis mattis urna, at mollis ante massa at dolor. Morbi mattis bibendum odio quis viverra. Aliquam dignissim sem molestie augue condimentum lacinia. Mauris sed hendrerit felis. Ut laoreet est rhoncus mauris bibendum interdum.

                             Aenean dictum at nunc pharetra dictum. Mauris non consequat nunc. Cras odio urna, auctor semper ullamcorper ut, consectetur et lectus. Maecenas facilisis tortor id lectus hendrerit accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In finibus vehicula quam non rhoncus. In nec volutpat sapien. Vivamus lectus libero, efficitur vel tempus vitae, facilisis ut risus. Fusce nunc justo, iaculis in sodales ut, dapibus nec nibh.

                             Fusce pharetra, ex in bibendum dignissim, lorem ipsum pellentesque elit, at dictum sapien dolor quis metus. Duis id risus et nisi iaculis sagittis. Quisque et nibh ut nisl pellentesque maximus. Aliquam accumsan accumsan bibendum. Suspendisse consectetur convallis justo, a pulvinar elit rutrum a. Nulla sit amet nisl nec mi consequat viverra. Phasellus vel aliquam est.',
                'tag_id' => 2,
                'categorie_id' => 2,
                'game_id' => 2,
                'photo_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'titel' => 'Minecraft has changed his whole game | New Features',
                'inhoud' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at turpis ut risus consequat volutpat. Nunc non ante ornare risus bibendum mollis a in justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada pretium diam et dictum. Integer tincidunt, magna in pretium sodales, nisl purus luctus diam, in cursus nulla magna vel ligula. Nulla facilisi. Aenean metus erat, dapibus sed elementum sed, auctor quis lacus. Donec et molestie neque, in auctor tellus. Nunc justo nisi, tempor non velit quis, ornare iaculis quam. Nulla sollicitudin tempor volutpat. Etiam finibus condimentum augue, id porta ante tincidunt nec. Integer congue diam vel lacinia convallis.

                             Aenean aliquet convallis risus id dapibus. Suspendisse fermentum et mi rhoncus dignissim. Etiam et bibendum odio. Praesent dolor velit, tempor eu gravida ut, dapibus a dui. Aliquam in sem augue. Maecenas sit amet mi a tellus dictum feugiat consectetur in mi. Nunc pulvinar venenatis est, eu dictum eros venenatis quis. Aliquam ullamcorper est eu quam mattis finibus. Aliquam neque ipsum, volutpat a porttitor ac, consequat nec ligula. Phasellus ultrices odio sit amet lectus auctor, sit amet vehicula felis maximus. Quisque quis euismod nunc, nec bibendum mauris. Ut tempus augue nulla, at rutrum mauris sagittis ut.

                             Donec ultricies a leo in sodales. Donec mi sem, rhoncus id rutrum sed, tristique sit amet nulla. Mauris commodo sapien sed lacus fringilla, dictum rutrum justo rutrum. Sed rhoncus, ex sit amet mattis dignissim, dui felis pulvinar orci, vel lacinia purus nisl ac dolor. Nunc odio nisl, commodo vitae consequat quis, porttitor quis dolor. Curabitur ac convallis nisi. Proin ut massa turpis. Etiam fringilla, ex eu pretium sollicitudin, urna velit sollicitudin dui, eget auctor ante eros sed mauris. Donec id sodales nisi. Suspendisse a erat non nulla mattis sollicitudin sed at arcu. Mauris semper ultricies arcu, non aliquam lacus tristique sed. Quisque erat nunc, condimentum non arcu ultrices, convallis facilisis nunc. Etiam hendrerit enim sit amet metus egestas, non rutrum tortor rutrum. Maecenas mi ante, cursus hendrerit lacus pharetra, sollicitudin egestas erat. Praesent luctus eleifend massa, ut consectetur arcu dapibus eu. Praesent varius neque a arcu euismod semper.

                             Proin vel ex efficitur, malesuada lectus eu, porta neque. Cras lacinia euismod nisl quis pellentesque. Quisque feugiat sit amet tortor nec pellentesque. Nam eget lectus in neque pharetra rutrum. Aliquam sit amet enim ac elit egestas lacinia. Etiam sapien lectus, volutpat eu erat et, lacinia laoreet turpis. Pellentesque nec ante magna. Vivamus ac commodo turpis. In congue egestas odio luctus rhoncus. Etiam tempor leo ac sem malesuada, a faucibus lectus suscipit. Sed congue nibh nec varius tincidunt. Etiam a libero eget ipsum gravida rhoncus tristique quis urna. Praesent in erat nec magna cursus tristique. Morbi vehicula luctus justo vitae euismod. Nulla maximus magna vel dapibus tincidunt.

                             Donec vitae viverra ex. Vestibulum euismod turpis a volutpat congue. Suspendisse potenti. Fusce eu metus ac lorem rutrum accumsan. Sed malesuada libero lectus, eu placerat mauris suscipit ac. Aliquam pulvinar ultrices neque, quis tincidunt massa dictum a. Vestibulum ut ullamcorper nunc. Aenean est nibh, maximus sed elementum id, luctus ac velit. Duis ullamcorper urna pulvinar odio fringilla, vel placerat est bibendum. Proin ut ligula ex. Donec sollicitudin malesuada elit et suscipit. Maecenas nisi orci, lacinia semper sagittis id, aliquet lacinia ante. Vestibulum auctor tincidunt magna, vel accumsan nibh imperdiet sit amet. Duis id est vitae mauris malesuada laoreet quis eget ante.',
                'tag_id' => 3,
                'categorie_id' => 3,
                'game_id' => 3,
                'photo_id' => 1,
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
                'photo_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('artikels')->insert($artikels);
    }
}

