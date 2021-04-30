

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
         $sql = "SELECT * FROM user";
       $result = $connection->query($sql);
    if ($result->num_rows > 0) {
 
     while($row = $result->fetch_assoc()) {
    //echo "User name: " . $row["uname"]. " - Password: " . $row["pass"].  "<br>";
     
    if($row['uname']==$_SESSION['username'] && $row['password']== $_SESSION['password'])
    {
       $_SESSION['firstname']=$row['fname'];
        $_SESSION['lastname']=$row['lname'];
         $_SESSION['email']=$row['email'];
           $_SESSION['gender']=$row['gender'];
            $_SESSION['mobile']=$row['mobile'];
             
      
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
<center>
 <form  method="POST" onsubmit="return validate()">
    <h1 style="text-align: center;">Login</h1>
         
             User Name <input type="text" id="uname" name="uname" > <br><br>
             &nbsp;&nbsp; <span id="errUname"></span>
             <br>
             <br>

 

            Password <input type="password" id="password" name="password"  >   <br>
            &nbsp;&nbsp; <span id="errPassword"></span>           

 

   
    <br> <br> <input type="submit" name="login" value="Login">
    <div ><a href="../Pro1/Reg.php" target="_blank" name="signupbtn">Signup</a></div>
    
    
</form>
</center>
  

 

<script>
   

 


    function get(id)
    {
        return document.getElementById(id);
    }

 

   

 

    function validate()
    {
        
        var uname = get("uname").value;
        var pass = get("password").value;
        
        var validate = true;
        if(uname=="")
        {
            validate = false;
            get("uname").focus();
            get("errUname").innerHTML="Please Enter User Name";
        }
        else
        {
            get("errUname").innerHTML="";
        }
         if(pass=="")
        {
            validate = false;
            get("password").focus();
            get("errPassword").innerHTML="Please Enter Password";
        }
        else
        {
            get("errPassword").innerHTML="";
        }
        return validate;

 

    }
  
 


</script>
</body>
</html>