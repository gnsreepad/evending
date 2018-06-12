<html>
<head>
<link rel="stylesheet" type="text/css" href="drinks1.css">
</head>
<body>
<header>
    <div class="nav">  
      <img src="33.jpg" class="logo">
      <ul class="menu">
      <li><a href="index.php">HOME</a></li>
        <li><a href="cart.php"class="btn btn2">ADMIN</a></li>
     
      </ul>
    </div>
</header>

<div class="wrapper">
    <form action="insert.php" method="post">
        Code: <input type="text" name="code">
             </br>
             </br>
        Name: <input type="text" name="name">     
             </br>
             </br>
        Price: <input type="text" name="price">   
            </br>
            </br>
        Count:<input type="number" name="count">
            </br>
            </br>
        Checksum:<input type="number" name="checksum">
            </br>
            </br>
        <input type="submit" value="Insert">    

    </form>

</div>
</body>
</html>

<?php
/*
$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
  echo "Not Connected";
}
if(!mysqli_select_db($con,'evending'))
{
  echo "Not Selected";
}

if(isset($_POST['submit']))
{
$code=$_POST['code'];
$name=$_POST['name'];
$price=$_POST['price'];
$count=$_POST['count'];
$checksum=$_POST['checksum'];

$sql="INSERT INTO product(code,name,price,count,checksum) VALUES ('$code','$name','$price','$count','$checksum')";

if(!mysqli_query($con,$sql))
{
  echo 'no value inserted';
}
else
{
  echo 'inserted values';
}
}

?>
*/
