<?php
date_default_timezone_set('Asia/Tokyo');
// url読込
include_once("./rss.php");

// curl
// ハンドルセット
$mh = curl_multi_init();
foreach($uris as $page => $uri){
    $ch[$page] = curl_init();
    curl_setopt($ch[$page], CURLOPT_URL, $uri);
    curl_setopt($ch[$page], CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch[$page], CURLOPT_HEADER, false);

    curl_multi_add_handle($mh, $ch[$page]);
}
// ハンドル実行
$active = null;
do{
    $mrc = curl_multi_exec($mh, $active);
}while($mrc == CURLM_CALL_MULTI_PERFORM);

while($active && $mrc == CURLM_OK){
    if(curl_multi_select($mh) != -1){
        do{
            $mrc = curl_multi_exec($mh, $active);
        }while($mrc == CURLM_CALL_MULTI_PERFORM);
    }
}

$res = array();
foreach($uris as $page => $uri){
    if(($err = curl_error($ch[$page])) == ''){
        $res[$page] = curl_multi_getcontent($ch[$page]);
    }else{
        $erroruri[$page] = $uri;
    }
    curl_multi_remove_handle($mh, $ch[$page]);
}
curl_multi_close($mh);

// 結果出力
$html = array();
$data = array();
foreach($uris as $page => $uri){
    //preg_replace('/:/','_',$res[$page]);
    $xml[$page] = simplexml_load_string($res[$page], 'SimpleXMLElement', LIBXML_NOCDATA);
    include_once("./parse/".$page.".php");
    $data[$page] = getdata($xml[$page]);
}

//var_dump($data);

// ファイル
foreach($uris as $page => $uri){
    $fp = fopen($page, "w");
    fwrite($fp, serialize($data[$page]));
    fclose($fp);
}
// db
?>
