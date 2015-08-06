<?php

class Controller_Ajax_Main extends Controller_Site
{
	public function post_send_message()
	{
		$post = $this->post_data('first_name','last_name','email','mobile','message');

		if(strpos($post->email->value, '@') === false){
			return false;
		}

		$email = Email::forge();
		$email->from('alexjamesshaffer@gmail.com', "{$post->first_name->value} {$post->last_name->value} ({$post->email->value})");
		$email->to('alexjamesshaffer@gmail.com', 'Alex Shaffer');
		$email->subject("Contact: {$post->first_name->value} {$post->last_name->value} | {$post->email->value} | {$post->mobile->value}");
		$email->body($post->message->value);

		try
		{
		    $email->send();
		}
		catch(\EmailValidationFailedException $e)
		{
		    // The validation failed
		    return Response::forge(json_encode(array(
				'error' => true,
				'error_message' => 'The validation failed'
			)));
		}
		catch(\EmailSendingFailedException $e)
		{
		    // The driver could not send the email
		    return Response::forge(json_encode(array(
				'error' => true,
				'error_message' => 'The driver could not send the email'
			)));
		}

		return Response::forge(json_encode(array(
			'success' => true,
		)));
	}
}