<?php


if (!function_exists('page_title')) {
	function page_title(string $title)
	{
	
	   return config('app.name').'|'.$title;
		
	}
}



if (!function_exists('menu_active')) {
	function menu_active($path)
	{
		return Route::is($path) ? 'active' : '';
	}

if (!function_exists('getMatricule')) {
	function getMatricule(string $name)
	{
		return date('Y', time()).'-'.sprintf("%05d", rand(1,100)).'-HC-'.strtoupper(Str::slug(substr($name,0,2),'-'));
	}
}



}



