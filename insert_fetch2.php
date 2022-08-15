<?php

    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "staff";

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }
    
    $username=$_POST['username'];
    
    
    $password=$_POST['password'];
    
    

    $sql = "SELECT * FROM organization WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    if ($row) {
        echo "<h2>Hey Great you remembered your login details</h2></br>";
        echo "<h3>Hello</h3> " . $row['username'] . "<br/>";


    } else {
        echo "Login Failed<br/>";
    }


    mysqli_close($conn);
?>
<?php if(!empty($EmailInput)) ?>
