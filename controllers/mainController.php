<?php



     function showCategory($category){



        //make an API call, to get the informations about graphs


        echo 'gathering datas about ' . $category;


        require './views/category.php';



     }



     function showProfile(){


      require './views/profile.php';
     }

     