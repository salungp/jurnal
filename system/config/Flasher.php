<?php
class Flasher
{
	public static function set_data($message = null)
	{
		$_SESSION['flasher'] = array('message' => $message);
	}

	public static function get_data()
	{
		if (isset($_SESSION['flasher']))
		{
			echo $_SESSION['flasher']['message'];
			unset($_SESSION['flasher']);
		}
	}
}