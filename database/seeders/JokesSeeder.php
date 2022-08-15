<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Joke;

class JokesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Joke::create([
            'status' => '
                ਛੇਤੀ ਟੁੱਟਣ ਵਾਲੇ ਨਹੀ ਸੀ ਅਸੀ , ਬਸ ਕੋਈ ਆਪਣਾ ਬਣ ਕੇ ਤੋੜ ਗਿਆ',
                'cat_id' => 5,
            ]);
    }
}
