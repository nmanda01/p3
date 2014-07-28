<?php

class lorem {
	public static function generate ($count, $text)
	
	{
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($count);
	$text = implode('<p>', $paragraphs);
		echo $text;
	}
	}