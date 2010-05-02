<?php

/*
 * Chirp.php
 * 
 * A standalone Standalone PHP 5.x class for Twitter. Can be used with CodeIgniter.
 * 
 * @author		Neeraj Kumar
 * @copyright	Copyright (c) 2010, Neeraj Kumar
 * @version		0.1
 * 
 */

class Chirp {
	
	var $username = '', $password = '';
	var $format = 'xml';
	var $api_url = 'http://api.twitter.com/';
	var $status = 'failed';

	function Chirp($options = array()) {

		$result = 1;

		$this->username = $options['username'];
		$this->password = $options['password'];
		$this->format = $options['format'];
		
		if(!function_exists('json_encode')) {
			$result = 0;
		}

		if(!function_exists('file_get_contents')) {
			$result = 0;
		}

		if($result === 0) {
			$this->status = 'failed';
		} else {
			$this->status = 'passed';
		}
		
		return $result;
	}
	
	function get_timeline($params = array()) {

		$result = file_get_contents('http://api.twitter.com/statuses/user_timeline/codemastersnake.', $this->format);
		return $result;
	}
	
	function get_public_timeline($params = array()) {

		$result = file_get_contents('http://api.twitter.com/1/statuses/public_timeline.' . $this->format);
		return $result;
	}

	
}