 <body>  
 <form method ="POST">
   <center>
  <h1 style="text-align: center;">Products</h1>
 <input  type="submit" name="back" value="Back"> <br> <br>
 <input  type="submit" name="productlist" value="ProductList"> <br> <br>
 
  
</center>
 </form>
 <?php
 

 if(isset($_POST["back"]))
{
    echo "<script>location.href='Welcomepage.php'</script>";
}


?>