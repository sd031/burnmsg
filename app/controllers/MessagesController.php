<?php

class MessagesController extends BaseController {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('messages.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $msg = new Message;

        // Generate a key
        $key = sha1(microtime(true).mt_rand(10000,90000));

        // Generate an IV
        $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_CFB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_DEV_URANDOM);

        // Encrypt the message
        $body = mcrypt_encrypt(MCRYPT_BLOWFISH, $key, Input::get('body'), MCRYPT_MODE_CFB, $iv);

        // Save the message to the database
        $msg->body = base64_encode($body);
        $msg->url = Message::get_unique_url();
        $msg->iv = base64_encode($iv);
        $msg->save();

        // Return the view
        return View::make('messages.store', ['url' => $msg->url, 'key' => $key]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function show($url, $key)
    {
        // Fetch our message
        $msg = Message::where('url', '=', $url)->first();

        if ($msg->destroyed) {
            $body = $msg->body;
        } else {
            // Decrypt it
            $iv = base64_decode($msg->iv);
            $body = mcrypt_decrypt(MCRYPT_BLOWFISH, $key, base64_decode($msg->body), MCRYPT_MODE_CFB, $iv);

            // Destroy the message
            $msg->body = "This message has been destroyed";
            $msg->destroyed = true;
            $msg->save();
        }

        return View::make('messages.show', ['body' => $body]);
	}

}
