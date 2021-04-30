 <body>  
</body>
<?php

session_start();
?>
 <form method ="POST">
 <br>
 <br>
 <br>
 <br>
  <h1 style="text-align: center;">Welcome To Our Shop <?php echo $_SESSION['username']
   ?></h1>
 <input  type="submit" name="profile" value="Profile"> <br><br>
 <input  type="submit" name="employee" value="Employee"> <br><br>
 <input  type="submit" name="branch" value="Branch"> <br><br>
 <input  type="submit" name="customer" value="Customer"> <br><br>
 <input  type="submit" name="product" value="Product"> <br><br>
  <input  type="submit" name="cn" value="Check Notification"> <br><br>
   <input  type="submit" name="logout" value="Logout"> <br> <br>
  

 </form>
 <?php

 if(isset($_POST["profile"]))
{
    echo "<script>location.href='profile.php'</script>";
}
 if(isset($_POST["employee"]))
{
    echo "<script>location.href='employee.php'</script>";
}
 if(isset($_POST["branch"]))
{
    echo "<script>location.href='branch.php'</script>";
}
 if(isset($_POST["customer"]))
{
    echo "<script>location.href='customer.php'</script>";
}
 if(isset($_POST["product"]))
{
    echo "<script>location.href='Product.php'</script>";
}
if(isset($_POST["logout"]))
{
    echo "<script>location.href='Login.php'</script>";
}


?>



