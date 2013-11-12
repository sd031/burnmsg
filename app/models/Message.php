<?php

class Message extends Eloquent {
	protected $guarded = array('id', 'created_at', 'updated_at');

	public static $rules = array();

	public static function  get_unique_url() {

 		// set a random number
 		$number = rand(10000, 9999999);
		// char list starts from 0-9 and then small alphabets and then capital alphabets
		// to make it compatible with eixisting base_convert function
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
				static::get_unique_url();
			}
			return $converted;
	}
}
