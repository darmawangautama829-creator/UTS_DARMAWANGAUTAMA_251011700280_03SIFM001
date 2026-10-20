<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    public function run(): void
    {
        $songs = [
            ['title' => 'Pikiran Yang Matang', 'artist' => 'Perunggu', 'album' => 'MEMBENTANG SAYAP', 'genre' => 'Indie Rock', 'duration' => '04:18', 'image' => 'biarkan-ia-tumbuh.jpg', 'release_year' => 2022],
            ['title' => 'Menantang Rasi Bintang', 'artist' => 'FSTVLST', 'album' => 'HITS KITSCH', 'genre' => 'Alternative Rock', 'duration' => '04:08', 'image' => 'fstvlst.jpg', 'release_year' => 2014],
            ['title' => 'O, Tuan', 'artist' => '.Feast', 'album' => 'MULTIVERSES', 'genre' => 'Indie Rock / Alternative', 'duration' => '04:09', 'image' => 'feast.jpg', 'release_year' => 2017],
            ['title' => 'Kuning', 'artist' => 'rumahsakit', 'album' => 'Nol', 'genre' => 'Indie Pop', 'duration' => '04:22', 'image' => 'kuning.jpg', 'release_year' => 2012],
            ['title' => 'Ini Abadi', 'artist' => 'Perunggu', 'album' => 'MEMBENTANG SAYAP', 'genre' => 'Indie Rock', 'duration' => '05:07', 'image' => 'ini-abadi.jpg', 'release_year' => 2022],
            ['title' => 'Jefferson', 'artist' => 'FSTVLST', 'album' => 'II', 'genre' => 'Alternative Rock', 'duration' => '04:31', 'image' => 'jefferson.jpg', 'release_year' => 2020],
            ['title' => 'Sandiwara Semu', 'artist' => 'rumahsakit', 'album' => 'rumahsakit', 'genre' => 'Indie Pop', 'duration' => '04:12', 'image' => 'sandiwara-semu.jpg', 'release_year' => 1998],
            ['title' => 'Penyangkalan', 'artist' => 'For Revenge', 'album' => 'Perayaan Patah Hati - Bab 1', 'genre' => 'Post-Hardcore / Emo', 'duration' => '04:06', 'image' => 'penyangkalan.jpg', 'release_year' => 2022],
            ['title' => 'Panasea', 'artist' => 'rumahsakit', 'album' => '1+2', 'genre' => 'Indie Pop / Britpop', 'duration' => '04:05', 'image' => 'panasea.jpg', 'release_year' => 2012],
        ];

        foreach ($songs as $song) {
        Song::create($song);
        }
    }
}