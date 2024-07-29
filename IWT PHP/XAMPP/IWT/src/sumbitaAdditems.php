<?php
include_once"cofig.php";
?>

<?php
 
 $name=$_POST["field1"];
 $code=$_POST["field2"];
 $price=$_POST["field3"];
 $qty=$_POST["field4"];
 $des=$_POST["field5"];
 
 $sql="INSERT INTO item(Item_id,item_name,Price,Quantity,Item_code)VALUE('','$name','$des','$price','$qty','$code')";
 
  if(myasqli_query($conn,$sql){
	echo"<script>alert('Record Insreted Successfully)</script>";
	header("location:index.html");
  }
  else
  {
	  echo"<script>alert('Error in insertion')</script>";
  }
//close the connection
mysqli_close($conn);
	  
	  
	  

?>