  <?php 
    session_start();
    /*$username=$_POST['uname'];
    $password=$_POST['password'];*/
  $employeename=$_POST['ename'];
    $employeesalary=$_POST['salary'];

    $host = "localhost";
    $user = "root";
    $pass = "123";
    $db = "admin";

    $connection = new mysqli($host, $user, $pass, $db);
    if($connection->connect_error)
     {
        echo "Database Connection Failed!";
        echo "<br>";
        echo $connection->connect_error;
    }
 
    else {
        echo "Database Connection Successful!";
        $statement1 = $connection->prepare("insert into employee (ename, salary) VALUES (?, ?)");
        $statement1->bind_param("ss", $d1, $d2);
        $d1 = $_POST['ename'];
        $d2 = $_POST['salary'];
        
        $status = $statement1->execute();
         $sql = "SELECT * FROM employee";
         $result = $connection->query($sql);
        if($status) {
            echo "Data Insertion Successful.";
        
        }
        else {
            echo "Failed to Insert Data.";
            echo "<br>";
            echo $connection->error;
        }
      
      
           if ($result->num_rows > 0)
            {
 
            while($row = $result->fetch_assoc()) 
            {
          echo "Employee name: " . $row["ename"]. " - Employee Salary: " . $row["salary"].  "<br>";
   
           }
        
       }
     }

    

    $connection->close();
    ?>
  <body>  

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
       <h1 style="text-align: center;">Employees</h1>
        <table width="50%" align="center">

            <tr >

                <td colspan="3" align="center">

                    <i>
                   
                    

                </td>



            </tr>

            <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">Employee Name</p>

                </td>

                <td width="60%"align="center">

                    <input type="text" name="ename"  placeholder="Type Employee Name" size="30px" required>

                </td>

                <td width="10%">


                </td>



            </tr>

            <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">Employee Salary</p>

                </td>

                <td width="60%"align="center">

                    <input type="text" name="salary"  placeholder="Type Employee Salary" size="30px" required>
                    

                </td>

                <td width="10%">


                </td>




            </tr>


                <td width="10%">


                </td>



            </tr>


            <tr height="50px">

                <td align="right"  colspan="3">

                    <input type="submit" name="submit" value="Add"> 
                    <input type="submit" name="submit" value="Remove"> 
                    <input type="submit" name="submit" value="Sort"> 
                    <div class="lnk"><a href="../Pro1/Welcomepage.php"  name="rBtn">back</a></div>



                </td>


            </tr>


        </table>



    </form>

   
    
</body>


         </tr>
         <?php
         if(isset($_POST["back"]))
{
    echo "<script>location.href='Welcomepage.php'</script>";
}
?>
</div>