
<style>


  #choiceHeader{

      position: absolute;
      left: 37.5vw;
      top: 7.5vh;

  }

 .characterDiv1{

    position: absolute;
    top: 40vh; 
    left: 30vw;
    height: 30vh;
    width: 15vw;
    display:flex;
    justify-content:center;
    align-items:center;
    cursor:pointer;

 }

 .characterDiv2{

    position: absolute;
    top: 40vh; 
    right: 30vw;
    height: 30vh;
    width: 15vw;
    display:flex;
    justify-content:center;
    align-items:center;

 }

 canvas{

     height:100%;
     width: 100%;
 }


</style>



<div id='choiceHeader'><h3>Choose your character!</h3></div>

<br>





<div class='characterDiv1'>
     <canvas id='characterCanvas'></canvas>
</div>


<div class='characterDiv2'>
     <canvas id='characterCanvas2'></canvas>
</div>



    <a href="<?php echo rootUrl ?>?profile">Choose character</a>


<script>



var canvas1 = document.getElementById('characterCanvas');

var c = canvas1.getContext('2d');

var none = 'none';




var images = new Array(10);

for (i=1; i < images.length ; i++){

       images[i] = new Image();

       images[i].src = './img/sprites/' + i.toString() + '.png';

}



var index = 1;

setInterval(function(){

    if( index >= 9){
          
        index = 1;

    }
    c.clearRect(0, 0, canvas1.width, canvas1.height);
    c.drawImage(images[index], 0, 0, canvas1.width, canvas1.height);

    index++;

},100)




//canvas2





var canvas2 = document.getElementById('characterCanvas2');

var c2 = canvas2.getContext('2d');

var none = 'none';




var images2 = new Array(10);

for (i=1; i < images2.length ; i++){

       images2[i] = new Image();

       images2[i].src = './img/sprites2/' + i.toString() + '.png';

}



var index2 = 1;

setInterval(function(){

    if( index2 >= 9){
          
        index2 = 1;

    }
    c2.clearRect(0, 0, canvas2.width, canvas2.height);
    c2.drawImage(images2[index2], 0, 0, canvas2.width, canvas2.height);

    index2++;

},100)







</script>