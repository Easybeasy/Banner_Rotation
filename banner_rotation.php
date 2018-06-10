<?php

 $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "t_banner_rotation";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";

$sql = "SELECT CONCAT('<a href=\"/upload/\" target=\"_blank\"><img src=\"/Banner_Rotation/upload/', B_UPL_NAME,'\" alt=\"BANNER1_ALT\" title=\"BANNER1_TITLE\"></a>') as LinkURL FROM t_banner";
//echo "$sql";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $banners = array();
    $counter = 0;
    while($row = $result->fetch_assoc()) {
       
       $banners[$counter] = $row["LinkURL"];
        $counter++; 
    }
} else {
    echo "0 results";
}
$conn->close();

shuffle($banners);



?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <!-- Bootstrap core CSS -->
        <link href="https://www.bootstrapworld.de/design/bootstrapworld/sc/css/bootstrap.min.css" rel="stylesheet">
        <title></title>
        
        <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
        <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <script src="function.js"></script>
        <link rel="stylesheet" href="jqueryui/style.css"> 
    </head>
    <body>
        Test
       <div>
       <?php print($banners[0]) ?>
      </div>
    </body>
</html>