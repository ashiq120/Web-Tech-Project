<!DOCTYPE html>
<html>

   <head>
      <title>HTML Unordered List</title>
   </head>

   <body>
      <ul type = "circle">
         <li>Shirt</li>
         <li>Pant</li>
         <li>Shoe</li>
         <li>Mask</li>
         <li>Bag</li>
         <li>Headphone</li>
         <li>Webcame</li>
         <li>Gaming mouse</li>
         <li>Gaming Laptop</li>
         <li>Gaming keyboard</li>
         <li>Speaker</li>
         <li>Wallet</li>
         <li>Rice</li>
         <li>Oil</li>
         <li>Chicken</li>
         <li>Beef</li>
         <li>Egg</li>
         <li>Coffe</li>
         <li>Body Spray</li>
         <li>Face Wash</li>
         <li>Shower Gel</li>
         <li>Hair Cream</li>
         <li>Shampoo</li>
      </ul>



         <td align="right">
                
             <form method ="POST">
<input  type="submit" name="back" value="Back">
</form>

         </tr>
         <?php
         if(isset($_POST["back"]))
{
    echo "<script>location.href='Welcomepage.php'</script>";
}
?>

             </table>
   </body>
	
</html>