<?php

//connection variables
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'tasks';


    //connection
    $conn = mysqli_connect($host, $username, $password, $dbname );
    if($conn->connect_error){
        die("Connection failed : " .$conn->connect_error);
    }
    $conn->set_charset('utf8');

$motor1 = $_POST['motor1'];
$motor2 = $_POST['motor2'];
$motor3 = $_POST['motor3'];
$motor4 = $_POST['motor4'];
$motor5 = $_POST['motor5'];
$motor6 = $_POST['motor6'];


if(isset($_POST['saveB'])){

        $my_query = "INSERT INTO motors_values (Motor1, Motor2, Motor3, Motor4, Motor5, Motor6)
        VALUES ('$motor1', '$motor2', '$motor3', '$motor4', '$motor5', $motor6)";

        $result = mysqli_query($conn, $my_query);


        if($result) {
            $my_query1 = "INSERT INTO buttons (Button, status) VALUES ('Save','True')";
            $result1 = mysqli_query($conn, $my_query1);
            echo "Item successfuly Added!";} //end inner if

        else{echo "ERROR: Unable to update all values <br>";}//end inner else

} //end outer if
else if(isset($_POST['startB'])) {

    $my_query2 = "INSERT INTO buttons (Button, status) VALUES ('Start','True')";
    $result2 = mysqli_query($conn, $my_query2);

  }


?>