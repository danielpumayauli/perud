<?php

use Illuminate\Database\Seeder;
use App\Song;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Song::create([
            'name' => 'Alone',
            'artist' => 'Alan Walker',
            'path'=> '/media/AlanWalker-Alone.mp3'
        ]);
        Song::create([
            'name' => 'Decir Adios',
            'artist' => 'Amen',
            'path'=> '/media/Amen-DecirAdios.mp3'
        ]);
        Song::create([
            'name' => 'Trouble',
            'artist'=> 'Coldplay',
            'path' => '/media/Coldplay-Trouble.mp3'

        ]);
        Song::create([
            'name' => 'Vuela Vuela',
            'artist' => 'Magneto',
            'path'=> '/media/MAGNETO-VUELA-VUELA.mp3'
        ]);
        Song::create([
            'name' => 'When You are Gone',
            'artist' => 'The Cramberries',
            'path'=> '/media/The-Cranberries-WhenYou_reGone.mp3'
        ]);

    }
}
