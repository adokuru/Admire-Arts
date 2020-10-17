<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ArtCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('art_categories')->insert([
            'name' => 'Post-War Art'
        ]);

        DB::table('art_categories')->insert([
            'name' => 'Contemporary Art'
        ]);

        DB::table('art_categories')->insert([
            'name' => 'Impressionist & Modern Art'
        ]);

        DB::table('art_categories')->insert([
            'name' => 'Pre-20th Century'
        ]);

        DB::table('art_categories')->insert([
            'name' => 'Photography'
        ]);
        DB::table('art_categories')->insert([
            'name' => 'Street Art'
        ]);

   




    }
}
