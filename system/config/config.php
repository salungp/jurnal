<?php
define('BASEURL', 'http://localhost/jurnal/');

function checked()
{
	if ( ! isset($_SESSION['logged_in']))
	{
		redirect('');
	}
}

function redirect($url)
{
	header('location:'.BASEURL.$url);
	exit;
}

function base_url($url)
{
	return BASEURL.$url;
}