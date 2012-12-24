<?php

function getdata($xml){
    $dataarray = array();
    $count = 0;
    foreach($xml->item as $key => $value){
        $dataarray[$count]['title'] = (string)$value->title;
        $dataarray[$count]['url'] = (string)$value->link;
        $node = $value->children('http://purl.org/rss/1.0/modules/content/');
        preg_match('/img src=".*?"/', (string)$node->encoded, $matches);
        $imgurl = explode('"', $matches[0]);
        $dataarray[$count]['img'] = $imgurl[1];
        $node = $value->children('http://purl.org/dc/elements/1.1/');
        $dataarray[$count]['date'] = (string)strtotime((string)$node->date);
        $count++;
    }
    return $dataarray;
}

?>
