<?php

class Controller_Assets extends Controller_Hybrid
{
	public function before()
	{
		parent::before();

		if (! Input::is_ajax())
		{
			$this->_init_assets();
		}
	}

	/**
	 * Assets loader
	 *
	 * @access  private
	 */
	private function _init_assets()
	{
		Casset::css('main.css');
		Casset::js('main.js');
	}

	/**
	 * Ajax GET data
	 *
	 * @access  public
	 */
	public function get_data()
	{
		foreach (func_get_args() as $arg)
		{
			$data[$arg] = new Model_Input($arg, Input::get($arg));
		}
		return (object) $data;
	}

	/**
	 * Ajax POST data
	 *
	 * @access  public
	 */
	public function post_data()
	{
		foreach (func_get_args() as $arg)
		{
			$data[$arg] = new Model_Input($arg, Input::post($arg));
		}
		return (object) $data;
	}
}
