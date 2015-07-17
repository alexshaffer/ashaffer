<?php

class Controller_Site extends Controller_Assets
{
	public function before()
	{
		parent::before();

		if (! Input::is_ajax())
		{
			// $this->_init_assets();
		}
	}

	/**
	 * Home page
	 *
	 * @access  public
	 */
	public function action_index()
	{
		$portfolio_pieces = array('texting_base' => 'Texting Base','lmb_law_firm' => 'LMB Law Firm','equistar' => 'Equistar Wealth Management');

		$this->template->header = View::forge('site/header');

		$this->template->content = View::forge('site/index', array(
			'portfolio_pieces' => $portfolio_pieces
		));
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		$this->template->content = Presenter::forge('welcome/404', 404);
		// return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
