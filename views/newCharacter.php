
<style>


 #characterDiv{

    position: absolute;
    top: 40vh; 
    left: 20vw;
    height: 30vh;
    width: 10vw;

    background: red;

 }



 #buildCharacterButton{

     position: absolute;

     top: 75vh;

     left: 35vw;

 }


</style>



<div>h3>Create your character!</h3></div>

<br>



<div> <button ><</button>Character's sex : <button onclick='nextSex()'>></button></div> <br><br>

<div> <button ><</button> Character's hair : <button onclick='nextSex()'>></button></div> <br><br>

<div> <button ><</button >Character's race : <button onclick='nextRace()'>></button></div> <br><br>

<div> <button><</button>Character's skin : <button  onclick='nextSkin()'>></button></div> <br><br>

<div> <button><</button >Character's class : <button onclick='nextClass()'>></button></div> <br><br> 




<div id='characterDiv'>
     <div id='charSex'></div>
     <div id='charRace'></div>
     <div id='charClass'></div>
    <div><h5>Your character : </h5></div>
    <canvas id='characterCanvas'></canvas>

</div>





<div id='buildCharacterButton'>

    <button>Build your character</button>

</div>



<script>

var man = 'man';
var woman = 'woman';


var sexes = [man, woman];


var warrior = 'warrior';
var magician = 'magician';


var classes = [warrior, magician];



var character = {sex: 0 , hair: 0 , class: 0 , animations: 0 };





function nextSex(){
    

    character.sex += 1;


    if( character.sex > 1){

        character.sex = 0;
    }


    alert(sexes[character.sex]);


}

function nextHair(){


    character.hair += 1;


    if( character.hair > 1){

        character.hair = 0;
    }

    alert(character.hair);


}


function nextSkin(){

    character.skin += 1;


    if( character.skin > 2){

        character.skin = 0;

    }

    alert(character.skin);


}


function nextClass(){

    
    character.class += 1;


    if( character.class > 1){

        character.class = 0;
        
    }



}


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