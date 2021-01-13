<?php



  class Exercice {


       private $wording;

       private $answer;


    public function __construct(){

        $this->wording = 'Quelle est l addresse a supprimer de la black list? Quelle est la nouvelle addresse à ajouter?';

        $this->answer = 1;
    
     }

      public function getWording(){

          return $this->wording;

      }


      public function getAnswer(){

        return $this->answer;


    }




  }