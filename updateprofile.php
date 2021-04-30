<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
</head>

<?php 
    session_start();
    /*$password=$_POST['password'];*/
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
    else{
       if(isset($_POST['update']))
    {  
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $password=$_POST['password'];
         $mobile=$_POST['mobile'];
          $email=$_POST['email'];

       $sq = "UPDATE user SET fname='$fname' where uname =".$_SESSION['username']."";
       $sq2 = "UPDATE user SET lname='$lname' where uname =".$_SESSION['username']."";
       $sq3 = "UPDATE user SET password='$password' where uname =".$_SESSION['username']."";
       $sq4 = "UPDATE user SET mobile='$mobile' where uname =".$_SESSION['username']."";
        $sq5 = "UPDATE user SET email='$email' where uname =".$_SESSION['username']."";
      
      
       if ($connection->query($sq) === TRUE && $connection->query($sq2) === TRUE && $connection->query($sq3) === TRUE && $connection->query($sq4) === TRUE && $connection->query($sq5) === TRUE) {
         echo "Update Successful";
        } else {
         echo "Error updating record: " . $connection->error;
         }
     }
     if(isset($_POST['delete']))
     {
  
         $sq6 = "DELETE FROM user where uname =".$_SESSION['username']."";
          if ($connection->query($sq6) === TRUE  ) {
         echo "Deleted";
        } else {
         echo "Error updating record: " . $connection->error;
         }
     }
    }

    ?>

    <body>  

 <form method ="POST">
    <center>
  <h1 style="text-align: center;">Profile</h1>

  <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">First Name</p>

                </td>

                <td width="60%"align="center">

                     <input type="text" name="fname"  value="<?php echo $_SESSION['firstname'] ;?>" >
                </td>

                <td width="10%">


                </td>



            </tr>

            <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">Last Name</p>

                </td>

                <td width="60%"align="center">

                    <input type="text" name="lname" value="<?php echo $_SESSION['lastname'] ;?>" >
                    

                </td>

                <td width="10%">


                </td>



            </tr>

             <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">Email</p>

                </td>

                <td width="60%"align="center">

                   <input type="email" name="email" id="" value="<?php echo $_SESSION['email'] ;?>">
                   

                </td>

                <td width="10%">


                </td>



            </tr>

             <tr>

                <td align="center" width="30%">

                <b> <p style="font-size: 16px;">Gender</p>


                </td>

                <td align="center" width="60%">
                    
             <input type="text" name="gender" value="<?php echo $_SESSION['gender'] ;?>">


                </td>


                <td width="10%">



                </td>

            </tr>

            <tr>

            </tr>

             
            <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">UserName</p>

                </td>

                <td width="60%"align="center">

                   <input type="text" name="uname" value="<?php echo $_SESSION['username'] ;?>">
                   

                </td>

                <td width="10%">


                </td>



            </tr>

                       <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">Password</p>

                </td>

                <td width="60%"align="center">

                    <input type="text" name="password" value="<?php echo $_SESSION['password'] ;?>">
                 

                </td>

                <td width="10%">


                </td>



            </tr>


                 <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">Mobile Number</p>

                </td>

                <td width="60%"align="center">

                <input type="text" name="mobile" value="<?php echo $_SESSION['mobile'] ;?>">
                   

                </td>



            </tr>

            <br>
            <br>

  <input  type="submit" name="back" value="Back"><br> <br>
 <input  type="submit" name="update" value="Update Profile"><br> <br>
  <input  type="submit" name="delete" value="Delete Profile"><br> <br>
  
</center>

<form>


 <?php

 
 if(isset($_POST["back"]))
{
    echo "<script>location.href='Welcomepage.php'</script>";
}

?>
 </form>
  </body>

