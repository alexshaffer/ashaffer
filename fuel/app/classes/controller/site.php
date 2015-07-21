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
		$portfolio_pieces = array();
		$portfolio_dir = File::read_dir(DOCROOT.'assets/img/portfolio');

		foreach ($portfolio_dir as $piece => $imgs) {
			$data = json_decode(file_get_contents(DOCROOT.'assets/img/portfolio/'.$piece.'data.json'));

			$object = array($data->name => (object) array(
				'img' => $piece,
				'url' => $data->url,
				'total_imgs' => count($imgs) - 1
				)
			);

			$portfolio_pieces[$data->name] = $object[$data->name];
		};

		$this->template->header = View::forge('site/header');

		$this->template->contact = View::forge('site/contact');
		$this->template->content = View::forge('site/index', array(
			'portfolio_pieces' => $portfolio_pieces,
			'primary_piece' => 'Texting Base'
		));
	}

	/**
	 * Portfolio page
	 *
	 * @access  public
	 */
	public function action_portfolio()
	{
		$portfolio_pieces = array();
		$portfolio_dir = File::read_dir(DOCROOT.'assets/img/portfolio');

		foreach ($portfolio_dir as $piece => $imgs) {
			$data = json_decode(file_get_contents(DOCROOT.'assets/img/portfolio/'.$piece.'data.json'));

			$object = array($data->name => (object) array(
				'img' => $piece,
				'url' => $data->url,
				'total_imgs' => count($imgs) - 1
				)
			);

			$portfolio_pieces[$data->name] = $object[$data->name];
		};

		$this->template->contact = View::forge('site/contact');
		$this->template->content = View::forge('site/portfolio', array(
			'portfolio_pieces' => $portfolio_pieces,
			'primary_piece' => 'Texting Base'
		));
	}

	/**
	 * About page
	 *
	 * @access  public
	 */
	public function action_about()
	{
		$this->template->contact = View::forge('site/contact');
		$this->template->content = View::forge('site/about');
	}

	/**
	 * Contact page
	 *
	 * @access  public
	 */
	public function action_contact()
	{
		$this->template->content = View::forge('site/contact');
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
