<body style="background: url(https://lh3.googleusercontent.com/proxy/mSmt67hWmLw78PsMnTnHk4FBsROOzVFvbYfvGPntVxqRDNI97a_gSxMBcuCAZF0plQ4YBErgRzYGcrJ3HvxnTy7g-TUNekc);background-size :100% 110%"> 
 <h1 style="text-align: center;">Customers</h1>
<form method ="POST">
 	<center>
  
  <input  type="submit" name="back" value="Back"><br> <br>
 <input  type="submit" name="cr" value="Customer Review"><br> <br>
 <input  type="submit" name="cl" value="Customer List"><br> <br>
 
</center>
 </form>


 <?php

 
 if(isset($_POST["back"]))
{
    echo "<script>location.href='Welcomepage.php'</script>";
}

?>

