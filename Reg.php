<body>  
</body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>

          table,td {
        border: 1px solid black;
        
    }

    </style>
</head>
<body >

  
    <?php 
    session_start();
    $host = "localhost";
    $user = "root";
    $pass = "123";
    $db = "admin";

        $d1 = $_POST['fname'];
        $d2 = $_POST['lname'];
        $d3 = $_POST['email'];
        $d4 = $_POST['gender'];
        $d5 = $_POST['uname'];
        $d6 = $_POST['password'];
        $d7 = $_POST['remail'];
        $d8 = $_POST['mobile'];

    // Mysqli object-oriented
    $connection = new mysqli($host, $user, $pass, $db);

    if($connection->connect_error) {
        echo "Database Connection Failed!";
        echo "<br>";
        echo $connection->connect_error;
    }
    else {
        echo "Database Connection Successful!";
        $statement1 = $connection->prepare("insert into user (fname, lname, email, gender, uname, password, remail, mobile) VALUES ('$d1','$d2','$d3','$d4','$d5','$d6','$d7','$d8')");
       
        $status = $statement1->execute();

        if($status) {
            echo "Data Insertion Successful.";
        }
        else {
            echo "Failed to Insert Data.";
            echo "<br>";
            echo $connection->error;
        }

    }
    

    $connection->close();
    ?>

    <form action="#" method="POST" onsubmit=" return formValidation()">

        <table width="50%" align="center">

            <tr >

                <td colspan="3" align="center">

                    <i>
                    <h2>Basic Information</h2>
                    

                </td>



            </tr>

            <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">First Name</p>

                </td>

                <td width="60%"align="center">

                    <input type="text" name="fname"  placeholder="Type First Name" size="30px" class="firstname">
                     <span id="fname"></span>

                </td>

                <td width="10%">


                </td>



            </tr>

            <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">Last Name</p>

                </td>

                <td width="60%"align="center">

                    <input type="text" name="lname"  placeholder="Type Last Name" size="30px"  class="lastname">
                     <span id="lname"></span>
                    

                </td>

                <td width="10%">


                </td>



            </tr>

             <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">Email</p>

                </td>

                <td width="60%"align="center">

                    <input type="email" name="email" placeholder="Type Your Email" size="30px" class="email">
                     <span id="email"></span>
                   

                </td>

                <td width="10%">


                </td>



            </tr>

             <tr>

                <td align="center" width="30%">

                <b> <p style="font-size: 16px;">Gender</p>


                </td>

                <td align="center" width="60%">
                    
            <input type="radio" name="gender" class="gender" value="Male">  Male 
            <input type="radio" name="gender" class="gender" value="Female"> Female
             <span id="gender"></span>
            


                </td>


                <td width="10%">



                </td>

            </tr>

            <tr>

            </tr>

             <tr >

                <td colspan="3" align="center">

                    <i>
                    <h2>User Account Information</h2>
                    

                </td>



            </tr>

            <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">UserName</p>

                </td>

                <td width="60%"align="center">

                    <input type="text" name="uname"  placeholder="Type User Name" size="30px" class="username">
                     <span id="uname"></span>
                   

                </td>

                <td width="10%">


                </td>



            </tr>

                       <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">Password</p>

                </td>

                <td width="60%"align="center">

                    <input type="password" name="password"  placeholder="Type Password" size="30px" class="password">
                     <span id="password"></span>
                 

                </td>

                <td width="10%">


                </td>



            </tr>

                       <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">Recovery Email</p>

                </td>

                <td width="60%"align="center">

                    <input type="email" name="remail"  placeholder="Type Recovery Email" size="30px" class="recoveryemail">
                     <span id="remail"></span>
                   

                </td>

                     <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">Mobile Number</p>

                </td>

                <td width="60%"align="center">

                    <input type="text" name="mobile"  placeholder="Type Mobile Number" size="30px" class="mobile">
                     <span id="mobile"></span>
                   

                </td>



            </tr>

            <tr height="50px">

                <td align="right"  colspan="3">

                    <input type="submit" name="submit" value="Submit"> 
                    <input type="submit" name="back" value="Reset">



                </td>


            </tr>


        </table>



    </form>

   <script src="validation.js"></script>
    
</body>

 <?php
 if(isset($_POST["back"]))
{
    echo "<script>location.Welcomepage.php'</script>";
}
?>
</html>