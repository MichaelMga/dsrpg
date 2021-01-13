<?php

   require 'const.php';

   require 'views/header.php';

   require 'classes/Exercice.php';

   require 'controllers/mainController.php';


   $request = $_SERVER["REQUEST_URI"];


   echo $request;



   switch($request){


      case root : 

         //showCategory('graph');

         showProfile();



         break;



   }



if(isset($_GET['category'])){
    

     showCategory($_GET['category']);

}



