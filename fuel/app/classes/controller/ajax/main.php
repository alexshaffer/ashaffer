<?php

class Controller_Ajax_Main extends Controller_Site
{
	public function post_send_message()
	{
		$post = $this->post_data('first_name','last_name','email','mobile','message');

		var_dump($post);
	}
}