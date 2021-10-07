<?php

//creating the Activity class but later make an instance from the index.php
class Activity
{
    //its properties will have public access
    public $title;
    public $date;
    public $city;
    public $type;
   // public $image;
    public $free;
    //public $access;
    //constrtuctor method, called __construct(parameters)
    function __construct($title,$date,$city,$type,$free){
        //asigning values defined in index.php
        $this->title = $title;
        $this->date = $date;
        $this->city = $city;
        $this->type = $type;
        $this->free= $free;
    }
}

