
<!-- Fetch user data from the database  -->
<?php
    // to connect through database 
    $db_hostname = "localhost";
    $db_username = "username";
    $db_password = "1234";
    $db_name = "test";

    $conn = mysqli_connect($db_hostname , $db_username , $db_password , $db_name);
        if (!$conn) {
            echo "connection Failed :" .mysqli_connect_error();
            exit;
            
        }

    $sql = "SELECT * FROM users" ;

    //sql query are executed with the help of below function
    $result = mysqli_query($conn , $sql);

    //if mysqli_query return false 
    if (!$result) {
        echo "Error:".mysqli_error($conn);
    }
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['name' . "</br>"];
     }

   
    mysqli_close($conn);

?>