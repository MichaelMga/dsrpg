<?php

 function getExerciceNames($category){
 
    //CURL
    
	$curl = curl_init();
	
	//2020 ligue 1 id : 2664	
	//CURRENT WEE
	
	curl_setopt_array($curl, [
		CURLOPT_URL => "http://localhost/DSAPI/?apiObject=" . $category
	]);
	
	$response = curl_exec($curl);	
 	curl_close($curl);
	
	if($response === false){

		return "il y'a eu une erreur";

	} else {

		return $response;

	}
	

   $exercice1 = new Exercice();
  
   $exercices = [$exercice1];


}

