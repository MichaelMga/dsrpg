<?php


   



     function showCategory($category){



        //make an API call, to get the informations about graphs


        echo 'gathering datas about ' . $category;

        $exercice1 = new Exercice();

        $exercices = [$exercice1];
        


        require './views/category.php';



     }



     function showProfile(){


      require './views/profile.php';
     }

     