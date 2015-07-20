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
		$portfolio_pieces = array(
			'Texting Base' => (object) array(
				'img' => 'texting_base', 
				'url' => 'http://textingbase.com',
				'total_imgs' => 1
				),
			'LMB Law Firm' => (object) array(
				'img' => 'lmb_law_firm', 
				'url' => 'http://lmblawfirm.com',
				'total_imgs' => 4
				),
			'Equistar Wealth Management' => (object) array(
				'img' => 'equistar', 
				'url' => 'http://equistar.com',
				'total_imgs' => 2
				)
			);

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
