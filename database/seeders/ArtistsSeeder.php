<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artist;
use Illuminate\Support\Facades\File;

class ArtistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/artist.json");
        $data = json_decode($json);
        foreach($data as $obj){
            Artist::create(array(
                'DisplayName' => $obj->DisplayName,
                'ArtistBio' => $obj->ArtistBio,
                'Nationality' => $obj->Nationality,
                'Gender' => $obj->Gender,
                'BeginDate' => $obj->BeginDate,
                'EndDate' => $obj->EndDate,
                'Wiki_QID' => $obj->Wiki_QID,
                'ULAN' => $obj->ULAN,
            ));
        }
        
    }
}
