<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    // conn to database
    $conn = mysqli_connect("localhost","root","","");
    
    //check if the generated ID exists
    function checkkeys(){
        $sql ="SELECT * FROM keystring";
        $result = mysqli_connect($conn, $sql);
        
        while ($row = mysqli_fetch_assoc($result))
        {
            
        }
    }
    //generate ID 
    function generateID(){
    }
    echo generateID(); 
  ?>      
</body>
</html>