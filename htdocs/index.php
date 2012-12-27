<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="content-script-type" content="text/javascript">
<meta name="description" content="2次元画像イラストリンク。イメージメインで見やすいサイトを目指します。">
<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="js/modal.js"></script>
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
$data = unserialize(file_get_contents("moeimg"));
foreach($data as $value){
    echo '<div class="item">'."\n";
    echo '<h5><a href="'.$value['url'].'" title="'.$value['title'].'" target="_blank"><span class="title">'.$value['title'].'</span></a></h5>'."\n";
    echo '<span class="img"><a href="'.$value['url'].'" target="_blank"><img class="linkimg" src="'.$value['img'].'" alt="'.$value['title'].'"></a></span>'."\n";
    echo '</div>'."\n";
}

?>
</div><!-- /contents-inner -->
</div><!-- /contents -->
<div id="left-sidebar">
left
<div class="rakuten">
<!-- Rakuten Widget FROM HERE --><script type="text/javascript">rakuten_design="slide";rakuten_affiliateId="0c1969db.59abcea3.0c1969dc.51ea896f";rakuten_items="ctsmatch";rakuten_genreId=0;rakuten_size="160x600";rakuten_target="_blank";rakuten_theme="gray";rakuten_border="off";rakuten_auto_mode="off";rakuten_genre_title="off";rakuten_recommend="on";</script><script type="text/javascript" src="http://xml.affiliate.rakuten.co.jp/widget/js/rakuten_widget.js"></script><!-- Rakuten Widget TO HERE -->
</div>
</div><!-- /left-sidebar -->
</div><!-- /conteiner -->
<div id="right-sidebar">
right
<div class="rakuten">
<!-- Rakuten Widget FROM HERE --><script type="text/javascript">rakuten_design="slide";rakuten_affiliateId="0c1969db.59abcea3.0c1969dc.51ea896f";rakuten_items="ctsmatch";rakuten_genreId=0;rakuten_size="160x600";rakuten_target="_blank";rakuten_theme="gray";rakuten_border="off";rakuten_auto_mode="off";rakuten_genre_title="off";rakuten_recommend="on";</script><script type="text/javascript" src="http://xml.affiliate.rakuten.co.jp/widget/js/rakuten_widget.js"></script><!-- Rakuten Widget TO HERE -->
</div>
</div><!-- /right-sidebar -->
<div id="footer">
<p>footer</p>
<br>
<br>
<br>
<p>footer</p>
</div><!-- /footer -->
</div><!-- /wrapper -->
<div id="modal" style="display:none">
<div id="modalheader">
modalheader
</div><!-- modalheader -->
<div id="modalmain">
modalmain
</div><!-- modalmain -->
<div id="modalfooter">
modalfooter
</div><!-- modalfooter -->
</div><!-- /modal -->
</body>
</html>
