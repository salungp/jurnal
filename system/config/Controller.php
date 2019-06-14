<?php
class Controller
{
	public function view($view, $data = array())
	{
		require_once 'aplication/views/'.$view.'.php';
	}

	public function model($model)
	{
		require_once 'aplication/models/'.$model.'.php';
		return new $model;
	}
}