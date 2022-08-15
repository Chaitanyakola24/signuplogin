<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
        
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "staff");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        
        $firstname =  $_REQUEST['firstname'];
        $lastname = $_REQUEST['lastname'];
        $username = $_REQUEST['username'];
        $gender =  $_REQUEST['gender'];
        $address = $_REQUEST['address'];
        
        $password = $_REQUEST['password'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO organization  VALUES ('$firstname',
            '$lastname','$username','$gender','$address','$password')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>