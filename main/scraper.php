<?php

	class Scraper {

		private $cookie;
		private $url;
		private $postFields;
		private $curlHandler;

		function __construct($cookie, $url, $postFields) {

			$this->cookie     = $cookie;
			$this->url    	  = $url;
			$this->postFields = $postFields;

			$this->initHandler();
		}

		function initHandler() {
			$this->curlHandler = curl_init();
		}

		function closeHandler() {
			curl_close($this->curlHandler);
		}

		function setUrl($url) {
			$this->url = $url;
		}

		function setPostFields($postFields) {
			$this->postFields = $postFields;
		}

		function scrapeHtml($usePost) {

		    $userAgent  = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36';

			curl_setopt($this->curlHandler, CURLOPT_SSL_VERIFYPEER, FALSE);
		    curl_setopt($this->curlHandler, CURLOPT_FAILONERROR, TRUE);
		    curl_setopt($this->curlHandler, CURLOPT_COOKIESESSION, TRUE);
		    curl_setopt($this->curlHandler, CURLOPT_FOLLOWLOCATION, TRUE);
		    curl_setopt($this->curlHandler, CURLOPT_RETURNTRANSFER, TRUE);
		    curl_setopt($this->curlHandler, CURLOPT_COOKIEFILE, $this->cookie);
		    curl_setopt($this->curlHandler, CURLOPT_COOKIEJAR, $this->cookie);
		    curl_setopt($this->curlHandler, CURLOPT_USERAGENT, $userAgent);
		    curl_setopt($this->curlHandler, CURLOPT_URL, $this->url);

		    if($usePost) {
		    	curl_setopt($this->curlHandler, CURLOPT_POST, TRUE);
		    	curl_setopt($this->curlHandler, CURLOPT_POSTFIELDS, http_build_query($this->postFields));
		    }
				
			return curl_exec($this->curlHandler);
		}
	}

	function getXPath($html) {
		$domDocument = new DomDocument();
		@$domDocument->loadHTML($html);
		$domXPath = new DomXPath($domDocument);
		return $domXPath;
	}

	function getInputById($html, $fieldId) {		
		$domXPath = getXPath($html);
		$input = $domXPath->query('//input[@id="'.$fieldId.'"]');
        return $input->item(0)->getAttribute('value');
	}

	function get_string_between($string, $start, $end){
		/* http://stackoverflow.com/questions/5696412/get-substring-between-two-strings-php */
    	$string = ' ' . $string;
    	$ini = strpos($string, $start);
    	if ($ini == 0) return '';
    	$ini += strlen($start);
    	$len = strpos($string, $end, $ini) - $ini;
    	return substr($string, $ini, $len);
	}
?>