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
    public function generateId($len,$str,$type)
    {
        switch ($type) {

            case 1:

                $keyLen = $len;
                $strvalue = $str;
                $randStr = substr(str_shuffle($strvalue), 0, $keyLen);
                return $randStr;
                
                break;

            case 2:
                
                $randStr = uniqid();
                $randStr1 = uniqid('SHOP'); //adds a prefix SHOP to string
                $randStr2 = uniqid(true); // adds a punctuation and an extra string    
                
                //change the return var to what you need for prefix
                return $randStr;
            

                break;
            case 3:

                $conn = mysqli_connect("localhost","root","","phpKeys");

                function checkKey($conn, $randStr){
                    //SQL select all from the table "keys"
                    $sql = "SELECT * FROM keys";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) 
                        {
                            if($row['keystringKey'] == $randStr){ 
                                $keyExixts = true;
                                break;
                            }else{
                                $keyExixts = false;
                                }
                        }
                return $keyExixts;
                }

                $keyLen = $len;
                $strValue = $str;
                $randStr = substr(str_shuffle($strValue), 0, $keyLen);
            
                $checkKeys = checkKey($conn, $randStr);
            
                while($checkKeys = true){
                    $randStr = substr(str_shuffle($strValue), 0, $keyLen);
                    $checkKeys = checkKey($conn, $randStr);  
                }
            
                return $randStr;
            
                break;                
            case 4:
                # code...
                // working pregress
                break;                
        }   
    }
}

?>