<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="content-script-type" content="text/javascript">
<meta name="description" content="2次元画像イラストリンク。イメージメインで見やすいサイトを目指します。">
<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
</head>
<body>
<div id="wrapper">
<div id="header">
<h1>2次画像</h1>
</div><!-- /header -->
<div id="container">
<div id="contents">
<div id="contents-inner">
<!-- コンテンツ -->
<!--<p>パンくず</p>-->
<?php
$data = unserialize(file_get_contents("moeing"));
foreach($data as $value){
    echo '<div class="item">'."\n";
    echo '<h5><a href="'.$value['url'].'" alt="'.$value['title'].'" target="_blank"><span class="title">'.$value['title'].'</span></a></h5>'."\n";
    echo '<span class="img"><a href="'.$value['url'].'" alt="'.$value['title'].'" target="_blank"><img class="linkimg" src="'.$value['img'].'"></a></span>'."\n";
    echo '</div>'."\n";
}

?>
</div><!-- /contents-inner -->
</div><!-- /contents -->
<div id="left-sidebar">
leftleftleftleftleftleftleft
<!-- Rakuten Widget FROM HERE --><script type="text/javascript">rakuten_design="slide";rakuten_affiliateId="0c1969db.59abcea3.0c1969dc.51ea896f";rakuten_items="ctsmatch";rakuten_genreId=0;rakuten_size="160x600";rakuten_target="_blank";rakuten_theme="gray";rakuten_border="off";rakuten_auto_mode="off";rakuten_genre_title="off";rakuten_recommend="on";</script><script type="text/javascript" src="http://xml.affiliate.rakuten.co.jp/widget/js/rakuten_widget.js"></script><!-- Rakuten Widget TO HERE -->
</div><!-- /left-sidebar -->
</div><!-- /conteiner -->
<div id="right-sidebar">
rightrightrightrightrightright
<!-- Rakuten Widget FROM HERE --><script type="text/javascript">rakuten_design="slide";rakuten_affiliateId="0c1969db.59abcea3.0c1969dc.51ea896f";rakuten_items="ctsmatch";rakuten_genreId=0;rakuten_size="160x600";rakuten_target="_blank";rakuten_theme="gray";rakuten_border="off";rakuten_auto_mode="off";rakuten_genre_title="off";rakuten_recommend="on";</script><script type="text/javascript" src="http://xml.affiliate.rakuten.co.jp/widget/js/rakuten_widget.js"></script><!-- Rakuten Widget TO HERE -->
</div><!-- /right-sidebar -->
<div id="footer">
<p>footer</p>
</div><!-- /footer -->
</div><!-- /wrapper -->
</body>
</html>
