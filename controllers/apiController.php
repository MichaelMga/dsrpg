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

		
		$exercice1 = new Exercice();
		$exercice2 = new Exercice();
		$exercice3 = new Exercice();
		$exercice4 = new Exercice();

  
		$exercices = [$exercice1 , $exercice2 , $exercice3 ,];

		return $exercices;

	}
	







}

