
<!-- Fetch user data from the submitted form and store it into a database table -->
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

    //Associative array or super global variable     
    // to fetch the data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pasword = $_POST['pasword'];


    // to insert the data
    $sql = "INSERT INTO users(name , email , pasword) VALUES ('$name' , '$email' , '$pasword')";

    //sql query are executed with the help of below function
    $result = mysqli_query($conn , $sql);


    //if mysqli_query return false 
    if (!$result) {
        echo "Error:".mysqli_error($conn);
        exit;
    }

    echo "Registraion Successfull" ;

   mysqli_close($conn);
?>