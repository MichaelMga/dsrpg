<h5>Category name: Queues and stacks </h5>



<h5>Exercice1 : </h5>

Stack


Here is a list of weapons you need to clean.


Here is a graph. Perform the following operation :


Remove 8 elements

Add the following elements in this order : [10, 15 , 14 , 8]

remove 10 elements 


What array do you obtain?


answer : 



<h5>Exercice 2 : </h5>


Queue : 

 Here is an original queue = 

 [ 10, 54 , 58 , 20 , 15 , 20 , 8 ,  10, 54 , 58 , 20 , 15 , 20 , 8 ,  10, 54 , 58 , 20 , 15 , 20 , 8] ;


Before going to war , your army needs to go element by element.

The first 95 elements of the queue are processed


Then, you add the following elements : 8 , 7 19 , 14 

Then, you remove 14 elements


What is the state of your queue?



answer : 



<h5>Exercice 3 : </h5>


Priority Queue



Here is an original queue = 

 [ 10, 54 , 58 , 20 , 15 , 20 , 8 , 10, 54 , 58 , 20 , 15 , 20 , 8 ,  10, 54 , 58 , 20 , 15 , 20 , 8] ;


Here is the queue


New troops arrived. 7 are the elite elements 

Then comes the number 5

The rest of the troop doesnt matter; 


Insert the following elements in your queue, then return it ;


 New troops = [8, 1 , 5 , 7 , 3 , 50 , 8 , 7]






answer : 



<?php


$queue =  [ 1,1,1,1,1,1,1, 2 , 2 , 2 , 2 ,  2 , 2 , 2 , 2 ,  2 , 2 , 2 , 2 ,  2 , 2 , 2 , 2 , 7 , 7 , 7, 15 , 17 , 18 , 18 , 19 , 19 , 19 , 20 , 20 , 20 ];
$queue2 = [8, 1 , 5 , 7 , 3 , 50 , 8 , 7];



for($i=0;$i < count($queue2); $i++){

    array_push($queue , $queue2[$i]);

    //bubble up
  
    
 }


