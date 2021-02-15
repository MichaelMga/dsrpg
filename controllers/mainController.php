<?php


     function showCategory($category){


        //make an API call, to get the informations about graphs , store those elements in an object , using Curl
        
        echo 'gathering datas about ' . $category;

        
        $exercices = getExerciceNames($category);


        require './views/category.php';

     }



     function showProfile(){

      require './views/profile.php';

     }

    
     function newCharacter(){

         require './views/newCharacter.php';

     }