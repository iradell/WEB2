<?php

function route ($path,$method,$make)
{

    if (checkRoute($path, $method)) {
        // separate $make in two parts
       $make = explode("#",$make);

       //divide each part of $make on two
       $controller = $make[0];
       $action     = $make[1];
        //include file
       include_once __DIR__."/../controller/{$controller}.php";
       //call funtion thats ma,e os equal to $action value
       $action();

    }
}


function checkRoute($path,$method){
  if(! ($_SERVER['REQUEST_METHOD']==$method && $_SERVER['PATH_INFO']==$path) )
    {

      return false;
   }

    return true;

    };



?>