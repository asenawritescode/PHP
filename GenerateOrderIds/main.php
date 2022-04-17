<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator</title>
</head>
<body>
     <?php
        $conn = mysqli_connect("localhost","root","","phpKeys");

        function checkKey($conn, $randStr){
            //SQL select all from the table "keys"
            $sql = "SELECT * FROM keystring";
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
        
        function generateKey($conn){
            $keyLen = 8;
            $str = "1234567890abcdefghijklmnopqrstuvwxyz";
            $randStr = substr(str_shuffle($str), 0, $keyLen);
        
            $checkKeys = checkKey($conn, $randStr);
        
            while($checkKeys = true){
                $randStr = substr(str_shuffle($str), 0, $keyLen);
                $checkKeys = checkKey($conn, $randStr);  
            }
        
            return $randStr;
        }

        echo generateKey($conn)
     ?>

</body>
</html>