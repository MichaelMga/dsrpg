<?php

   require 'const.php';

   require 'views/header.php';

   require 'classes/Exercice.php';

   require 'controllers/apiController.php';

   require 'controllers/mainController.php';


   $request = $_SERVER["REQUEST_URI"];



   switch($request){


      case root : 

         //showCategory('graph');

         //newCharacter();

         showProfile();



         break;


   }



    
  if(isset($_GET['exercice'])){
    
     showExercice($_GET['exercice'] , $_GET['category']);

     return;

  }


if(isset($_GET['category'])){
    
     showCategory($_GET['category']);

     return;

}



