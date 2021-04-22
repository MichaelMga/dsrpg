<style>

   *{
      margin: 0;

      padding: 0;

      font-size: 0.8vw;

   }


   button{

       cursor:pointer;
   }



   body{

       background-image: url("https://wallpaperaccess.com/full/96462.jpg");
       background-size: cover;
       background-repeat: no-repeat;
       background-opacity: 0.5;

       
   }


    canvas{

        width: 30%;
        height: 30%;
    }


    #opacityLayer{

        position: absolute;
        top:0px;
        left:0px;
        height: 100%;
        width: 100%;
        background:black;
        opacity:0.9;
        z-index: 3;
    }


   #mainDiv{

       position: absolute;
       bottom : 5vh;
       height : 90vh;
       width: 95vw;
       left: 2.5vw;
       background : red;
       display: flex;
       flex-direction: row;
       justify-content: space-around;
       align-items: center;
       z-index: 4;



   }


 


   #accomplishmentsDiv{

     width: 40%;
     height: 75%;
     display:flex;    
     flex-direction:row;
     justify-content: space-around;
     background: yellow;

   }

#accomplishmentsDiv div {    

   height: 100%; 
   width: 23%;
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

   width: 30vw;
   height :71vh;
   display : flex;
   flex-direction: column;
   justify-content: space-around;
   align-items: center;

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
   display:flex;
   justify-content:center;
   align-items:center;

}








</style>




<div id='opacityLayer'>

       


</div>




<div id='mainDiv'>
 
  <div id='accomplishmentsDiv'>

    <div id='column1' >

      <div id='linkedLists'>
          
          <div>linkedLists</div>
          
          <div>
               <a href='<?php echo rootUrl . '?category=linkedLists'?>'><button>voir</button></a>
          </div>

      </div>
      
   
      <div id='StacksAndQueues'>
          <div>stacks and queues</div>
          <div><a href='<?php echo rootUrl . '?category=stacksAndQueues'?>'><button>voir</button></a></div>
      </div>

    
      <div id='Dynamic programming'>
          <div>dynamic programming</div>
          <div><a href='<?php echo rootUrl . '?category=dynamicProgramming'?>'><button>voir</button></a></div>
      </div>
   </div>

   <div id='column2'>

    
     <div id='Trees'>
          <div>Trees</div>
          <div><a href='<?php echo rootUrl . '?category=trees'?>'><button>voir</button></a></div>
      </div>
      
   
      <div id='Paths'>
          <div>Paths</div>
          <div><a href='<?php echo rootUrl . '?category=paths'?>'><button>voir</button></a></div>
      </div>

    
      <div id='Sorting'>
          <div>Sorting</div>
          <div><a href='<?php echo rootUrl . '?category=sorting'?>'><button>voir</button></a></div>
      </div>
   </div>

  <div id='column3'>


     <div id='Strings'>
          <div>Strings</div>
          <div><a href='<?php echo rootUrl . '?category=strings'?>'><button>voir</button></a></div>
      </div>
      
   
      <div id='Hashing'>
          <div>Hashing</div>
          <div><a href='<?php echo rootUrl . '?category=hashing'?>'><button>voir</button></a></div>
      </div>

    
      <div id='Miscellaneous'>
          <div>Miscellaneous (algorithms)</div>
          <div><a href='<?php echo rootUrl . '?category=miscellaneous'?>'><button>voir</button></a></div>
      </div>

   </div>

     <div id='column4'>


     <div id='programming'>
          <div>programming</div>
          <div><a href='<?php echo rootUrl . '?category=strings'?>'><button>voir</button></a></div>
      </div>
      
   
      <div id='Hashing'>
          <div>Rest APIs</div>
          <div><a href='<?php echo rootUrl . '?category=hashing'?>'><button>voir</button></a></div>
      </div>

    
      <div id='Miscellaneous'>
          <div>Miscellaneous (computer science)</div>
          <div><a href='<?php echo rootUrl . '?category=miscellaneous'?>'><button>voir</button></a></div>
      </div>

   </div>


  </div>





  <div id='characterDiv'>

    <div id='levelDiv'>Votre niveau : </div>

    <div id='levelDiv'> star star star </div>


    <div id='avatarDiv'>

     <canvas id='characterCanvas'></canvas>

   </div>


</div>







</div>






<script>


//this object renders a particular


//chracter
  
var canvas = document.getElementById('characterCanvas');

var c = canvas.getContext('2d');



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
    c.drawImage(images[i], 0 , 0 , canvas.width , canvas.height );


},200)





</script>