<?php
	/*
	$request = file_get_contents('https://cursos.dankicode.com');
	preg_match_all('/div class="box-curso-single ">(.*?)<div class="nome-curso">(.*?)<p>(.*?)<\/p>(.*?)<\/div>(.*?)<\/div><!--box-curso-single-->/s', $request, $matches);
	echo $matches[3][2];
	*/
	/*
	require('vendor/autoload.php');
	phpQuery::newDocumentHTML('https://cursos.dankicode.com');
	$conteudo = pq('.box-curso-single a')->eq(0)->attr('href');
	echo $conteudo;
	*/

	/*
	require('vendor/autoload.php');
	use duzun\hQuery;

	$doc = hQuery::fromUrl(
	'http://localhost/teste.php'), //url
	
	echo $doc;
	*/

	$news = simplexml_load_file('https://news.google.com/news/feeds?ned=pt-BR_br&hl=pt-BR&gl=BR&ouput=rss');

	$feeds = array();

	$i = 0;

	foreach ($news->channel->item as $item) {
		if($i == 0){
			$i++;
			continue;
		}
		preg_match('@src="([^"]+)"@',$item->description, $match);

		$parts = explode('<font size="-1">',$item->description);

		$feeds[$i]['title'] = (string) $item->title;
		$feeds[$i]['link'] = (string) $item->link;
		$feeds[$i]['image'] = $match[1];
		$feeds[$i]['titulo_noticia'] = strip_tags($parts[1]);
		$feeds[$i]['story'] = strip_tags($parts[2]);

		$i++;
	}

	echo '<pre>';
	print_r($feeds);
	echo '</pre>';

?>