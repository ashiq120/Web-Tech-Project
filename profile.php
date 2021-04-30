 <!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
</head>

<?php 
	session_start();
	/*$username=$_POST['uname'];
	$password=$_POST['password'];*/
    

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
<div ><a href="../Pro1/updateprofile.php" target="_blank" name="updatebtn">Update</a></div>

  
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

