<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([ 
            [
            'title' => 'Americano', 
            'content' => 'Americano melambangkan ketenangan yang sempurna bagi Taysters 
                          yang menyukai hal-hal sederhana dalam hidup. Jika kamu pecinta
                          kopi americano, berarti Taysters jenis orang yang menyukai ketenangan.', 
            'featured_image' => '/img/americano.jpg'
        ],
        [
            'title' => 'Cappucino', 
            'content' => 'Cappucino merupakan minuman panas pilihan untuk orang yang berhati hangat 
                          dan dapat dengan mudah melupakan sesuatu. Jika Tasyters menyukai minuman ini, 
                          berarti kamu membutuhkan seorang teman untuk bisa melihat sesuatu dengan logis 
                          dan tidak melibatkan perasaan lagi.', 
            'featured_image' => '/img/cappucino.jpg'
        ],
        [
            'title' => 'Mocha', 
            'content' => 'Taysters penikmat kopi Mocha berarti kamu orang yang menyenangkan, tipikal orang yang
                          mencintai dengan baik dan penuh kreativitas.', 
            'featured_image' => '/img/mocha.jpg'
        ],
        [
            'title' => 'Frappucino', 
            'content' => 'Frappucino itu melambangkan kebahagiaan dan energi setiap orang. Pilihan ini sesuai untuk 
                          Taysters yang selalu bersemangat setiap harinya. Biasanya orang yang minum frappucino 
                          bukanlah pecinta coffee, ia lebih menyukai krim dan gula yang terdapat dalam racikan ini.', 
            'featured_image' => '/img/frapuccino.jpg'
        ],
        [
            'title' => 'Iced Coffee', 
            'content' => 'Ice coffee sangat cocok untuk orang yang menyukai minuman favorit di dunia ini tapi tidak memiliki 
                          waktu untuk mendinginkannya. Apabila Taysters menyukai minuman ini, itu tandanya kamu orang yang sibuk, 
                          vokal dan tegas.', 
            'featured_image' => '/img/ice.jpg'
        ],
        [
            'title' => 'Macchiato', 
            'content' => 'Minuman hasil seduhan jenis ini memiliki rasa yang seimbang tanpa perlu khawatir dengan busa di atasnya. 
                          Meminum macchiato sama saja melambangkan bahwa kamu adalah orang yang berkelas tinggi.',
            'featured_image' => '/img/macchiato.jpg'
        ]
    ]);
    }
}
