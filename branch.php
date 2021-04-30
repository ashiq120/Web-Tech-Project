  <?php 
    session_start();
    /*$username=$_POST['uname'];
    $password=$_POST['password'];*/
  $brachname=$_POST['bname'];
    $branchaddress=$_POST['baddress'];

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
        $statement1 = $connection->prepare("insert into branch (bname, baddress) VALUES (?, ?)");
        $statement1->bind_param("ss", $d1, $d2);
        $d1 = $_POST['bname'];
        $d2 = $_POST['baddress'];
        
        $status = $statement1->execute();
         $sql = "SELECT * FROM branch";
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
          echo "Branch name: " . $row["bname"]. " - Branch Address: " . $row["baddress"].  "<br>";
   
           }
        
       }
     }

    

    $connection->close();
    ?>

  <body>  

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
       <h1 style="text-align: center;">Our Branches</h1>
        <table width="50%" align="center">

            <tr >

                <td colspan="3" align="center">

                    <i>
                   
                    

                </td>



            </tr>

            <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">Branch Name</p>

                </td>

                <td width="60%"align="center">

                    <input type="text" name="bname"  placeholder="Type Branch Name" size="30px" required>

                </td>

                <td width="10%">


                </td>



            </tr>

            <tr>

                <td width="30%" align="center">

                   <b> <p style="font-size: 16px;">Branch Address</p>

                </td>

                <td width="60%"align="center">

                    <input type="text" name="baddress"  placeholder="Type Branch Address" size="30px" required>
                    

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