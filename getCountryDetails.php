<?php
include "dbFunctions.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $response = array();
    $query = "SELECT * FROM statistics where id=$id";
    $result = mysqli_query($link, $query);

    $response = mysqli_fetch_assoc($result);

    mysqli_close($link);

    echo json_encode($response);
}
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
        <title></title>
    </head>
    <body>
<?php
// put your code here
?>
    </body>
</html>
