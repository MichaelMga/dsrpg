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



#characterDiv{

position: absolute;
top: 40vh; 
right: 20vw;
height: 30vh;
width: 10vw;

background: red;

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
              <div>stacks and queues</div>
              <div>Taux d'accomplissement : 35%</div>
              <div><a href='<?php echo rootUrl . '?category=linkedLists'?>'><button>voir</button></a></div>
          </div>

        
          <div id='Dynamic programming'>
              <div>dynamic programming</div>
              <div>Taux d'accomplissement : 35%</div>
              <div><a href='<?php echo rootUrl . '?category=linkedLists'?>'><button>voir</button></a></div>
          </div>
    </div>

     <div id='column2'>

        
         <div id='Trees'>
              <div>Trees</div>
              <div>Taux d'accomplissement : 35%</div>
              <div><a href='<?php echo rootUrl . '?category=linkedLists'?>'><button>voir</button></a></div>
          </div>
          
       
          <div id='Paths'>
              <div>Paths</div>
              <div>Taux d'accomplissement : 35%</div>
              <div><a href='<?php echo rootUrl . '?category=linkedLists'?>'><button>voir</button></a></div>
          </div>

        
          <div id='Sorting'>
              <div>Sorting</div>
              <div>Taux d'accomplissement : 35%</div>
              <div><a href='<?php echo rootUrl . '?category=sorting'?>'><button>voir</button></a></div>
          </div>
     </div>

    <div id='column3'>


         <div id='Strings'>
              <div>Strings</div>
              <div>Taux d'accomplissement : 35%</div>
              <div><a href='<?php echo rootUrl . '?category=linkedLists'?>'><button>voir</button></a></div>
          </div>
          
       
          <div id='Hashing'>
              <div>Hashing</div>
              <div>Taux d'accomplissement : 35%</div>
              <div><a href='<?php echo rootUrl . '?category=linkedLists'?>'><button>voir</button></a></div>
          </div>

        
          <div id='Miscellaneous'>
              <div>Miscellaneous</div>
              <div>Taux d'accomplissement : 35%</div>
              <div><a href='<?php echo rootUrl . '?category=linkedLists'?>'><button>voir</button></a></div>
          </div>

    </div>


</div>





<div id='characterDiv'>

    <div id='levelDiv'>Votre niveau : </div>

    <div id='avatarDiv'>

         <canvas id='characterCanvas'></canvas>

    </div>


</div>







<script>


//this object renders a particular


//chracter
  
var canvas = document.getElementById('characterCanvas');

var c = canvas.getContext('2d');


canvas.width = window.innerWidth/5;

canvas.height = window.innerHeight/5;


var images = new Array(10);

for (i=1; i < images.length ; i++){

       images[i] = new Image();

       images[i].src = './img/sprites/' + i.toString() + '.png';

}

setInterval(function(){
    
    i++;

    if( i >= 9){
          
        i = 1;

    }
    c.clearRect(0, 0, canvas.width, canvas.height);
    c.drawImage(images[i], 10 , 10 , 100 , 100 );


},200)





</script>