<?php
include 'config/config.php';

spl_autoload_register(function($class) {
	include 'config/'.$class.'.php';
});