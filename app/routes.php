<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
	
	
} );


Route::get('/lorem-ipsum', function()
{
	
	echo 'Enter /lorem-ipsum/{n}, where {n} is the number of paragraphs.  <br /> For example, for 5 paragraphs, enter /lorem-ipsum/5' ;
	
});

Route::get('/lorem-ipsum/{count}', function($count)
{
	
	
	$v = View::make('v_lorem');
	//$content = lorem::generate(3, $content);
	//$count = 3;
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($count);
	$content = implode('<p>', $paragraphs);
	
	$v->text=$content;
	return $v;
	
});



Route::get('/user-generator', function()
{
	echo 'Under construction' ;
});

