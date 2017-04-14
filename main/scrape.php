<?php 

	function curlGet($url) {

		// Initialize a cURL session
		$ch = curl_init(); 

		// Set options for a cURL transfer
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
			
		// Perform a cURL session
		$result = curl_exec($ch);

		// Close a cURL session
		curl_close($ch);

		return $result; 

	}

	function getXPath($item) {

		// Instantiating a new DomDocument object
		$domDocument = new DomDocument();

		// Loading the HTML from downloaded page
		@$domDocument->loadHTML($item);

		// Instantiating a new DomXPath object
		$domXPath = new DomXPath($domDocument);

		return $domXPath;

	}

?>