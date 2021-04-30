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
</form>

   <script src="validation.js"></script>
    
</body>

 <?php
 if(isset($_POST["back"]))
{
    echo "<script>location.Welcomepage.php'</script>";
}
?>