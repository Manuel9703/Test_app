<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $profile = Http::acceptJson()
            ->withoutVerifying()
            ->get('https://randomuser.me/api/')->json();

        $name = $profile['results'][0]['name']['first'];
        $surname = $profile['results'][0]['name']['last'];
        $pic = $profile['results'][0]['picture']['medium'];


        $picture = file_get_contents($pic);
        $imageEncoded = base64_encode($picture);


        DB::table('table_users')->insert(
            [
                'name' => $name,
                'surname' => $surname,
                'picture' => $picture
            ]
        );

        \App\Models\User::factory(10)->create();

    }
}

