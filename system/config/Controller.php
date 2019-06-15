<?php
class Controller
{
	public function view($view, $data = array())
	{
		include 'aplication/views/'.$view.'.php';
	}

	public function model($model)
	{
		include 'aplication/models/'.$model.'.php';
		return new $model;
	}
}