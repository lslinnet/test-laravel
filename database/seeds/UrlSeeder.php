<?php

use Illuminate\Database\Seeder;
use App\Url;

class UrlSeeder extends Seeder
{
    /**
     * Seed with a few urls.
     *
     * @return void
     */
    public function run()
    {
        $url = new Url();
        $url->url = 'https://blogs.unity3d.com/2020/07/30/unity-hackweek-2020-in-it-together-no-matter-where-we-are/';
        $url->save();

        $url = new Url();
        $url->url = 'https://blogs.unity3d.com/2020/07/14/10-ways-to-speed-up-your-programming-workflows-in-unity-with-visual-studio-2019/';
        $url->slug = '10waysworkflows';
        $url->save();
    }
}
