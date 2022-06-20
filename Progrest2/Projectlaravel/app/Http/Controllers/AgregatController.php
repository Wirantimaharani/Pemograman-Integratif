<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AgregatController extends Controller
{
    public function index()
    {
        $myXMLData = file_get_contents("https://rss.tempo.co/nasional");

        $xml = simplexml_load_string($myXMLData) or die("Error : Cannot create object");
        print_r($xml);
        foreach ($xml->channel->item as $item) {
            echo 'insert' . $item->title . '\n';
            echo 'insert' . $item->category . '\n';
            echo 'insert' . $item->image . '\n';
            echo 'insert' . $item->description . '\n';
            echo 'insert' . $item->link . '\n';
            echo 'insert' . $item->pubDate . '\n';
            $values = array('id' => 0, 'title' => $item->title, 'category' => $item->category, 'picture' => $item->image, 'description' => $item->description, 'link' => $item->link, 'pubDate' => $item->pubDate);
            DB::table('news')->insert($values);
        }

        $myXMLData2 = file_get_contents("http://www.koreatimes.co.kr/www/rss/rss.xml");

        $xml2 = simplexml_load_string($myXMLData2) or die("Error : Cannot create object");
        print_r($xml2);
        foreach ($xml2->channel->item as $item2) {
            echo 'insert' . $item2->title . '\n';
            echo 'insert' . $item2->category . '\n';
            echo 'insert' . $item2->image . '\n';
            echo 'insert' . $item2->description . '\n';
            echo 'insert' . $item2->link . '\n';
            echo 'insert' . $item2->pubDate . '\n';
            $values = array('id' => 0, 'title' => $item2->title, 'category' => $item2->category, 'picture' => $item2->image, 'description' => $item2->description, 'link' => $item2->link, 'pubDate' => $item2->pubDate);
            DB::table('news')->insert($values);
        }

        $myXMLData3 = file_get_contents("https://en.yna.co.kr/RSS/culture.xml");

        $xml3 = simplexml_load_string($myXMLData3) or die("Error : Cannot create object");
        print_r($xml3);
        foreach ($xml3->channel->item as $item3) {
            echo 'insert' . $item3->title . '\n';
            echo 'insert' . $item3->category . '\n';
            echo 'insert' . $item3->image . '\n';
            echo 'insert' . $item3->description . '\n';
            echo 'insert' . $item3->link . '\n';
            echo 'insert' . $item3->pubDate . '\n';
            $values = array('id' => 0, 'title' => $item3->title, 'category' => $item3->category, 'picture' => $item3->image, 'description' => $item3->description, 'link' => $item3->link, 'pubDate' => $item3->pubDate);
            DB::table('news')->insert($values);
        }
    }
}
