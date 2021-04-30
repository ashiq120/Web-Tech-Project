<body>  
</body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File_Handling_02_Registration</title>
    <style>

          table,td {
        border: 1px solid black;
        
    }

    </style>
</head>
<body >

  
    <?php 

    $host = "localhost";
    $user = "root";
    $pass = "123";
    $db = "admin";

    // Mysqli object-oriented
    $conn1 = new mysqli($host, $user, $pass, $db);

    if($conn1->connect_error) {
        echo "Database Connection Failed!";
        echo "<br>";
        echo $conn1->connect_error;
    }
    else {
        echo "Database Connection Successful!";
        $stmt1 = $conn1->prepare("insert into user (fname, lname, email, gender, uname, password, remail, mobile) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt1->bind_param("ssssssss", $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8);
        $p1 = $_POST['fname'];
        $p2 = $_POST['lname'];
        $p3 = $_POST['email'];
        $p4 = $_POST['gender'];
        $p5 = $_POST['uname'];
        $p6 = $_POST['password'];
        $p7 = $_POST['remail'];
        $p8 = $_POST['mobile'];
        $status = $stmt1->execute();

        if($status) {
            echo "Data Insertion Successful.";
        }
        else {
            echo "Failed to Insert Data.";
            echo "<br>";
            echo $conn1->error;
        }

    }
    

    $conn1->close();
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

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

                    <input type="text" name="fname"  placeholder="Type First Name" size="30px">

                </td>

                <td width="10%">


                </td>



            </tr>

            <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">Last Name</p>

                </td>

                <td width="60%"align="center">

                    <input type="text" name="lname"  placeholder="Type Last Name" size="30px" >
                    

                </td>

                <td width="10%">


                </td>



            </tr>

             <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">Email</p>

                </td>

                <td width="60%"align="center">

                    <input type="email" name="email" placeholder="Type Your Email" size="30px" >
                   

                </td>

                <td width="10%">


                </td>



            </tr>

             <tr>

                <td align="center" width="30%">

                <b> <p style="font-size: 16px;">Gender</p>


                </td>

                <td align="center" width="60%">
                    
            <input type="radio" name="gender" value="Male" >  Male 
            <input type="radio" name="gender" value="Female" > Female
            


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

                    <input type="text" name="uname"  placeholder="Type User Name" size="30px">
                   

                </td>

                <td width="10%">


                </td>



            </tr>

                       <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">Password</p>

                </td>

                <td width="60%"align="center">

                    <input type="password" name="password"  placeholder="Type Password" size="30px">
                 

                </td>

                <td width="10%">


                </td>



            </tr>

                       <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">Recovery Email</p>

                </td>

                <td width="60%"align="center">

                    <input type="email" name="remail"  placeholder="Type Recovery Email" size="30px">
                   

                </td>

                <td width="10%">


                </td>

                <td width="60%"align="center">

                    <input type="text" name="mobile"  placeholder="Type mobile number" size="30px">
                 

                </td>

                <td width="10%">


                </td>



            </tr>

            <tr height="50px">

                <td align="right"  colspan="3">

                    <input type="submit" name="submit" value="Submit"> 
                    <input type="reset" name="" value="Reset">



                </td>


            </tr>






        </table>






    </form>

   
    
</body>
</html>