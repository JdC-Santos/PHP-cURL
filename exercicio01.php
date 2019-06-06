<?php
	//carregando a página do google
	
	$curl = curl_init();
	curl_setopt($curl,CURLOPT_URL,'https://www.google.com');
	curl_exec($curl);
	curl_close($curl);