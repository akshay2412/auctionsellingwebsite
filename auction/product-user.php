<?php
session_start();
$con=mysqli_connect('localhost','root','','auction');

$Select = "select * from additem";
$Rsc  = mysqli_query($Select);

?>
<html>
<head>
<link rel="stylesheet" href="add.css">
</head>
<body>
<div id="main">

       <div id="logo">
	     <tr>
		 <td>
		 <img src="logo1.png">
		 </td>
		 
		 <td align="right"><?php echo $_SESSION['name'];?></td>
		 </tr>
	   </div>
	  
	  <div id="forlogin">
          <?php include("menu.php"); ?>
      </div>

<div id="addform1">
<div><img src="logo1.png" id="image"/></div>

<div>
<form name="regi" method="post"  enctype="multipart/form-data" action="additem1.php">
<table>
	<tr>
	<?php
		$i=0;
		while($Data = mysql_fetch_array($Rsc))
		{
		if($i%4=='0')
		{
		echo "</tr><tr>";
		}
	?>
	
	<td><img src="upload/<?php echo $Data['Image']?>" height="150" width="150">
	<br>
	<span><?php echo $Data['Product_name']?></span>
	</td>
	<?php  $i++; } ?>
	</tr>
</table>
</form>
</div>
</div>
</body>
</html>