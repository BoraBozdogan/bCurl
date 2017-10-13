<?php

class bCurl {
	public $timeout   = 10;
	public $referer   = "https://google.com.tr";
    public $useragent = "Google Bot";
	public $ssl_verify_peer = false;
	public $ssl_verify_host = false;
	public $follow_location = false;
	public $return_transfer = false; 
	public $header = false;
	
	private $bCurl;
	 
	public function get($url) {
		$this->bCurl = curl_init();
		curl_setopt($this->bCurl,CURLOPT_URL,$url);
		curl_setopt($this->bCurl,CURLOPT_USERAGENT,$this->useragent);
		curl_setopt($this->bCurl,CURLOPT_REFERER,$this->referer);
		curl_setopt($this->bCurl,CURLOPT_FOLLOWLOCATION,$this->follow_location);
		curl_setopt($this->bCurl,CURLOPT_RETURNTRANSFER,$this->return_transfer);
	    curl_setopt($this->bCurl,CURLOPT_HEADER,$this->header);
		$err = curl_error($this->bCurl);
		if($err) {
			echo "Curl error! : $err";
		}
		$response = curl_exec($this->bCurl);
		return $response;
	}
	
	public function post($url,$data) {

		if($url == "") {
			die("post url null!");
		}elseif($data == "") {
			die("post content null!");
		}
		
		$this->get($url,$data);
		curl_setopt($this->bCurl,CURLOPT_POST,true);
		curl_setopt($this->bCurl,CURLOPT_POSTFIELDS,http_build_query($data));
		$response = curl_exec($this->bCurl);
		return $response;
	}
	
}
