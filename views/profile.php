<style>

   *{
      margin: 0;

      padding: 0;

      font-size: 0.8vw;

   }

    #accomplishmentsDiv{

        position: absolute;

        top: 18vh;
        left: 5vw;

        width: 40%;

        height: 75%;

        display:flex;    

        flex-direction:row;

        justify-content: space-around;

}

#accomplishmentsDiv div {    
    
    height: 100%;
    width: 30%;
    display: flex; 
    flex-direction: column;  
    justify-content: space-around;


}

#accomplishmentsDiv div div{


    height: 28%;

    width: 100%;

    background: red;

}




#characterDiv{

    position: absolute;

    right: 5vw;

    top: 22vh;

    width: 30vw;

    height :71vh;


    display : flex;

    flex-direction: column;

    justify-content: space-around;



}



#levelDiv{

    height: 10%;

    width: 100%;
    
    background: green;

}


#avatarDiv{
 
   height: 80%;

   width : 100%;

   background: blue;

}



</style>




Welcome on your profile


<div id='accomplishmentsDiv'>

    <div id='column1' >

          <div id='linkedLists'>
              
              <div>linkedLists</div>
              <div>Taux d'accomplissement : 35%</div>
              <div><a href='<?php echo rootUrl . '?category=linkedLists'?>'><button>voir</button></a></div>

          </div>
          
       
          <div id='StacksAndQueues'>
              <div>linkedLists</div>
              <div>Taux d'accomplissement : 35%</div>
              <div><button>voir</button></div>
          </div>

        
          <div id='Dynamic programming'>
              <div>linkedLists</div>
              <div>Taux d'accomplissement : 35%</div>
              <div><button>voir</button></div>
          </div>
    </div>

     <div id='column2'>

        
         <div id='Trees'>
              <div>linkedLists</div>
              <div>Taux d'accomplissement : 35%</div>
              <div><button>voir</button></div>
          </div>
          
       
          <div id='Paths'>
              <div>linkedLists</div>
              <div>Taux d'accomplissement : 35%</div>
              <div><button>voir</button></div>
          </div>

        
          <div id='Sorting'>
              <div>linkedLists</div>
              <div>Taux d'accomplissement : 35%</div>
              <div><button>voir</button></div>
          </div>
     </div>

    <div id='column3'>


         <div id='Strings'>
              <div>linkedLists</div>
              <div>Taux d'accomplissement : 35%</div>
              <div><button>voir</button></div>
          </div>
          
       
          <div id='Hashing'>
              <div>linkedLists</div>
              <div>Taux d'accomplissement : 35%</div>
              <div><button>voir</button></div>
          </div>

        
          <div id='Miscellaneous'>
              <div>linkedLists</div>
              <div>Taux d'accomplissement : 35%</div>
              <div><button>voir</button></div>
          </div>

    </div>


</div>





<div id='characterDiv'>

    <div id='levelDiv'>Votre niveau : </div>

    <div id='avatarDiv'></div>


</div>