<?php
/*
Version 2.0.0

class key 
attributes(length, strings , type)
methods (1.random string , 2.random id , 3.unique id, 4.custom id )
param (len,str,type)

*/

class key 
{
    private $len = 8;
    private $str;
    private $type = 1;
    private $available_types = [ 1 , 2, 3, 4];
    
    // setter and getters
    public function setLen($newLen){
        $this->$len = $newLen;
        return void;
    }

    public function getLen(){
        return $this->age;
    }

    public function setStr($newstr){
        $this->$len = $newstr;
        return void;
    }

    public function getStr(){
        return $this->str;
    }

    public function setType($newtype)
    {
        if (in_array($newtype, $this->available_types)) {
            $this->$type = $newtype;  
        }
        
        return void;
    }

    public function getType(){
        return $this->$type;
    }

    // method 
}

?>