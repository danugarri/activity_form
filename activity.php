<?php

//creating the Activity class but later make an instance from the index.php
class Activity
{
    //its properties will have public access
    public $title;
    public $date;
    public $city;
    public $type;
    public $image;
    //public $access;
    //constrtuctor method, called __construct(parameters)
    function __construct($title,$date,$city,$type){
        //asigning values defined in index.php
        $this->title = $title;
        $this->date = $date;
        $this->city = $city;
        $this->type = $type;
        //$this->image= "<img src='https://www.bioparcvalencia.es/wp-content/uploads/2017/06/ficha-animal-bioparc-valencia-leon.jpg'/>";
        //$this->access = $access;
        /* con esto puedo asignarle el valor de la imagen pero necesito mostrar una imagen disitntinta según corresponda*/
    }
}

