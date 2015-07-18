<?php

class Controller_Site extends Controller_Assets
{
	public function before()
	{
		parent::before();

		if (! Input::is_ajax())
		{
			$this->_init_nav();
		}
	}

	private function _init_nav()
	{
		$this->template->nav = View::forge('template/nav');
	}

	/**
	 * Home page
	 *
	 * @access  public
	 */
	public function action_index()
	{
		$portfolio_pieces = array('texting_base' => (object) array('name' => 'Texting Base', 'url' => 'http://textingbase.com'),'lmb_law_firm' => (object) array('name' => 'LMB Law Firm', 'url' => 'http://lmblawfirm.com'),'equistar' => (object) array('name' => 'Equistar Wealth Management', 'url' => 'http://equistar.com'));

		$this->template->header = View::forge('site/header');

		$this->template->content = View::forge('site/index', array(
			'portfolio_pieces' => $portfolio_pieces
		));
	}

	/**
	 * About page
	 *
	 * @access  public
	 */
	public function action_about()
	{
		// $this->template->header = View::forge('site/header');

		$this->template->content = View::forge('site/about');
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 */
	public function action_404()
	{
		$this->template->content = View::forge('site/404');
	}
}
