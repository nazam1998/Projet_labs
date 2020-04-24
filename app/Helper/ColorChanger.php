<?php

namespace App\Helper;

class ColorChanger{



    public static function green($string){

        return str_replace( array( '[' , ']' ), array('<span>','</span>'), $string);
    
    }
    public static function span($string){

        return str_replace( array( '[' , ']' ), array('<span style="color: #2be6ab;">','</span>'), $string);
    
    }



    public static function lien($string,$lien){
        return str_replace(array('[',']'),array('<a target="_blank"href=\''.$lien.'\'>','</span>'),$string);
    }
}
