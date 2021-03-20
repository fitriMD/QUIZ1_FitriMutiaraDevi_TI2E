<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert([ 
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
        ]
    ]);
    }
}