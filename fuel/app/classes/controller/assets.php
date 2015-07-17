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
}
