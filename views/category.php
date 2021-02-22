

  <style>


      #mainDiv{

         height: 100%;

         width: 100%;

         background: red;

         display: flex;

         flex-direction: column;

         justify-content: space-around;

         align-items: center;
      }

      
      .exercice{

          height: 15vh;

          width: 80vw;

          background: purple;

          display:flex;

          flex-direction: row;

          justify-content: space-between;

          align-items: center;

          padding-right: 4%;

          padding-left: 4%;

          border-radius: 12px;


      }

      .exercice div {

         width: 10%;

         height: 60%;



      }




  </style>
 

    <div id='mainDiv'>

       

       <?php 

    
        for($i=0; $i < count($exercices) ; $i++){

           echo'<div class="exercice"> 
                      <div>Exercice' .  ($i+1) .'</div>

                      <div> <a href="' . rootUrl . '?exercice=' . $i . '&category=' . $category . '">  voir </a> </div>
               </div>';

        }

     ?>
    
    
    
    </div>

 
