<?php

namespace Database\Seeders;

use DOMXPath;
use DOMDocument;
use App\Models\Rss;
use App\Models\Post;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Rss::create([
            'name' => 'Coppa Magz',
            'username' => 'coppamagz',
            'url' => 'https://coppamagz.com/feed/'
        ]);

        Rss::create([
            'name' => 'Korea Times',
            'username' => 'koreatimes',
            'url' => 'http://www.koreatimes.co.kr/www/rss/rss.xml'
        ]);

        Rss::create([
            'name' => 'YonHap Agency',
            'username' => 'yonhapagency',
            'url' => 'https://en.yna.co.kr/RSS/culture.xml'
        ]);
        


        // $myXMLData = file_get_contents("https://coppamagz.com/feed/");
        $myXMLData2 = file_get_contents("http://www.koreatimes.co.kr/www/rss/rss.xml");
        $myXMLData3 = file_get_contents("https://en.yna.co.kr/RSS/culture.xml");
        // $xml = simplexml_load_string($myXMLData) or die("Error : Cannot create object");
        $xml2 = simplexml_load_string($myXMLData2) or die("Error : Cannot create object");
        $xml3 = simplexml_load_string($myXMLData3) or die("Error : Cannot create object");
        
        foreach ($xml3->channel->item as $item) {
            Post::create([
                'title' => $item->title,
                'url' => $item->link,
                'category' => '',
                'img' => '',
                'rss_id' => 3
            ]);
        }

        foreach ($xml2->channel->item as $item) {
            Post::create([
                'title' => $item->title,
                'category' => $item->category,
                'url' => $item->link,
                'img' => $item->enclosure['url'],
                'rss_id' => 2
            ]);
        }

        // foreach ($xml->channel->item as $item) {
        //     Post::create([
        //         'title' => $item->title,
        //         'category' => $item->category,
        //         'url' => $item->guid,
        //         'img' => $item->children('media', True)->content->attributes(),
        //         'rss_id' => 1
        //     ]);
        // }
    }
}
