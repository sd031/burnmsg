<?php

class Message extends Eloquent {
	protected $guarded = ['id', 'created_at', 'updated_at'];

	public static $rules = ['body' => 'required'];

    public static function validate($input)
	{
		$v = Validator::make($input, static::$rules);
		return $v->fails() ? $v : true;
	}

	public static function  get_unique_url() {

 		// set a random number
 		$number = rand(10000, 9999999);

        // character list for generating a random string
		$charlist = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

			$decimal = intval($number);

			//get the list of valid characters
			$charlist = substr($charlist, 0, 62);

			$converted = '';

            while($number > 0) {
				$converted = $charlist{($number % 62)} . $converted;
				$number = floor($number / 62);
			}

            if( static::whereUrl($converted)->first() ) {
				$converted = static::get_unique_url();
			}

            return $converted;
	}
}
