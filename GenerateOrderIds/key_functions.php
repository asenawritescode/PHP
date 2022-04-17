<?php


// 1.Generate a random string 
//   Can be used to email default "reset" passwords
//   Limited to * characters

function generatePass()
{
    $keyLen = 8;
    $str = "1234567890abcdefghijklmnopqrstuvwxyz@()/?";
    $randStr = substr(str_shuffle($str), 0, $keyLen);
    return $randStr;
}

// 2.Generate a random ID based on a certain timestamp
//  Can be used to generate urls and file names 
//  Not secure, someone can guess part of the key  
function generateId()
{ 
    $randStr = uniqid('SHOP');
    $randStr1 = uniqid('SHOP'); //adds a prefix shop to string
    $randStr2 = uniqid(true); // addsa punctuation and an extra string    
    
    //change the return var to what you need
    return $randStr;
}

// 3.Generate a Unique ID non repeated
//  Uses a dB to check if it exists
// if the gen. id exists it makes another id

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

}

function generateKey(){
    $keyLen = 8;
    $str = "1234567890abcdefghijklmnopqrstuvwxyz@()/?";
    $randStr = substr(str_shuffle($str), 0, $keyLen);

    $checkKeys = checkKey($conn, $randStr);
 
}
?>