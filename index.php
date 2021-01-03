<?php

   require 'const.php';

   require 'views/header.php';

   require 'controllers/mainController.php';


   $request = $_SERVER["REQUEST_URI"];


   echo $request;



   switch($request){


      case root : 

         showCategory('graph');

         break;

    

      

   }










