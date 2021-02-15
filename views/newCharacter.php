
<style>


 #characterDiv{

    position: absolute;
    top: 40vh; 
    left: 20vw;
    height: 30vh;
    width: 10vw;

    background: red;

 }



</style>



<div>h3>Create your character!</h3></div>

<br>





<div id='characterDiv'>
     <canvas id='characterCanvas'></canvas>
</div>






<script>


//this object renders a particular


//chracter
  
var canvas = document.getElementById('characterCanvas');

var c = canvas.getContext('2d');


canvas.width = window.innerWidth;

canvas.height = window.innerHeight;


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
    c.drawImage(images[i], 100 , 100 , 100,100);


},200)





</script>