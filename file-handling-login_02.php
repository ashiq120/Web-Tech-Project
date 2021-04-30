<body>  
</body>
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>


<?php 
    session_start();
    /*$username=$_POST['uname'];
    $password=$_POST['password'];*/
    $_SESSION['username']=$_POST['uname'];
    $_SESSION['password']=$_POST['password'];

    $host = "localhost";
    $user = "root";
    $pass = "123";
    $db = "admin";

    $connection = new mysqli($host, $user, $pass, $db);
    if($connection->connect_error) {
        echo "Database Connection Failed!";
        echo "<br>";
        echo $connection->connect_error;
    }
    else {
        $sql = "SELECT uname,password FROM user";
        $result = $connection->query($sql);
    if ($result->num_rows > 0) {
 
     while($row = $result->fetch_assoc()) {
    //echo "User name: " . $row["uname"]. " - Password: " . $row["pass"].  "<br>";
     
    if($row['uname']==$_SESSION['username'] && $row['password']== $_SESSION['password'])
    {
        echo "<script>location.href='Welcomepage.php'</script>";
    }
        else
        {
            echo "login failed";
        }

}
    } else {
    echo "0 results";
    }
        
    }

    $connection->close();

    ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

    <center>
    <i>
    <h2>User Login</h2>
    

    <b> <p style="font-size: 16px;">UserName</p> <input type="text" name="uname" value="" placeholder="Type UserName" size="30px">
    
    
                    
    <b> <p style="font-size: 16px;">Password</p> <input type="password" name="password" value="" placeholder="Type Password" size="30px">
    
    
    <br> <br> <input type="submit" name="login" value="Login">
    <br> <br> <input type="submit" name="signup" value="Signup">
    
     
    
    
    </center>                    

</form>
   <?php 
    if(isset($_POST["signup"]))
        {   
             
            echo "<script>location.href='Reg.php'</script>";
        }
    ?>
</body>
</html>