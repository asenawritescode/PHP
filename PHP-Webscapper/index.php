<?php

require 'vendor/autoload.php';

use Symfony\Component\DomCrawler\Crawler;

$url = 'https://footystats.org/england/premier-league/fixtures';

$client = new GuzzleHttp\Client();
$res = $client->request('GET', $url );

$html1 = ''.$res->getBody();

$crawler = new Crawler($html1);

// $crawler->filter('body');

// print_r($crawler);

$nodeValues = $crawler->filter('.full-matches-table > h2')->each(
    function (Crawler $node, $i) {
    
        $first = $node->text();

        $second = array();
        $pattern = '/^0.00 Stats 0.00$/';

        foreach ($node->siblings()->filter('.match-feed > div > div > div > div > ul' ) as $itemList) {
            $tempData1 = $itemList->nodeValue;
            preg_replace($pattern ,'' ,$tempData1);
            array_push($second, $tempData1);
            // print_r($itemList->nodeValue);
        }

		return( array($first, $second));

    }
);

echo (json_encode($nodeValues));






// Get data from url

// loop through data

// search for values needed

// echo data back to screen