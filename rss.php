<?php
	header('Content-type: application/xml');
	
    require "configuration.php";
    require CHEMIN_ACCESSEUR . "LangageDAO.php";
    $listeLangages = LangageDAO::listerLangages();
?>
<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
	>

	<channel>
		<title>Which Language : Quel langage choisir ?</title>
		<atom:link href="http://localhost/projet-serveur-web-2020-Emustle/rss.php" rel="self" type="application/rss+xml" />
		<link>http://localhost/projet-serveur-web-2020-Emustle/</link>
		<description>Le site pour vous aider à choisir le langage de programmation qui vous convient</description>
		<language>fr-CA</language>
		<?php
			foreach ($listeLangages as $langage)
			{
		?>
		<item>
			<title><?=$langage['nom']?></title>
			<link>http://localhost/projet-serveur-web-2020-Emustle/detail-langage.php?id=<?=$langage['id']?></link>
			<pubDate>Fri, 24 Apr 2020 00:00:00 +0000</pubDate>
			<category><![CDATA[Langage]]></category>
			<description><![CDATA[<?=$langage['description']?>]]></description>
		</item>
		<?php
			}
		?>
	</channel>
</rss>
