<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rss;

class RssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rss::create([
            // 'name' => 'news',
            // 'url' => "https://www.antaranews.com/rss/terkini.xml"

            // 'name' => 'news photo',
            // 'url' => "https://www.antaranews.com/rss/photo.xml"

            'name' => 'news video',
            'url' => "https://www.antaranews.com/rss/video.xml"
        ]);
    }
}
