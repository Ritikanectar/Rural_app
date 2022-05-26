<?php

/**
* change plain number to formatted currency
*
* @param $number
* @param $currency
*/

function callcurl($url,$method,$parameter=""){

        $apiKey = "OoDa0bWMQ/LW614JRNnbFl+bgPN1ZuinTdJE8I3yM8SGTbkjH9iC+IxEUSwjDly3";
        $url = 'https://uisp-dev.ruralwisp.ca/crm/api/v1.0/'.$url;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
        if($method == "GET"){
            curl_setopt($ch, CURLOPT_POST, 0);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        }else{
            curl_setopt($ch, CURLOPT_POST, 1);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        }
		
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'X-Auth-App-Key: ' . $apiKey
			));

		$response = curl_exec ($ch);
		$err = curl_error($ch);  //if you need
		curl_close ($ch);
		return $response;
}

// function formatNumber($number, $currency = 'IDR')
// {
//    if($currency == 'USD) {
//         return number_format($number, 2, '.', ',');
//    }
//    return number_format($number, 0, '.', '.');
// }

?>