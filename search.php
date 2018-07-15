<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
@media screen and (max-width:640px) {
  #x{margin-left:120px;}
}
.nav  
{	width:100%;
	height:90px;
	position:absolute;
	top:0; left:0; color:white; z-index:7; font-family:verdana; -webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
	background-color: #3d5b99;	
}
</style>
<body background="y.jpg">
	<div class="nav"><h1>VENDX</h1> </div>
	

<?php
 
$con = mysqli_connect('127.0.0.1','root','');
                    if(!$con)
                    {
                      echo "Not Connected to database";
                    }
                    if(!mysqli_select_db($con,'evending'))
                    {
                      echo "Unable to establish connection";
                    }

if (isset($_POST["search"])) 
{
    $searching = $_POST["search"];
    $searching = preg_replace("#[^a-z]#i", "", $searching);
	$sql = "SELECT vend FROM product WHERE name LIKE '%$searching%'" ;
                    $result = $con-> query($sql);
                   // $count=mysql_num_rows($result);
                    $row = $result->fetch_assoc();
                   
                   /*if( $count == 0)
                    {
                    echo 'no such item available';
                    }*/
                    //else
					
                    {
                       //while ($row)
                        {
						if ($row['vend'] == 1)
							{
								echo "<div style=\"text-align:center\">";
								echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
								echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
								echo '<h4 id="x"> AVAILABLE IN </h4>'; echo '<h1 id="x"><a href="drinks1.php" style="color: black;">VENDING MACHINE 1</a></h1>';
								echo "</div>";
							}
						else if ($row['vend'] == 2)
							{
								echo "<div style=\"text-align:center\">";
								echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
								echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
								echo 'AVAILABLE IN '; echo '<h1><a href="drinks2.php" style="color: black;">VENDING MACHINE 2</a></h1>';
								echo "</div>";
							}
						else if ($row['vend'] == 3)
							{
								echo "<div style=\"text-align:center\">";
								echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
								echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
								echo 'AVAILABLE IN '; echo '<h1><a href="drinks3.php" style="color: black;">VENDING MACHINE 3</a></h1>';
								echo "</div>";
							}
						else
							{
								echo "<div style=\"text-align:center\">";
								echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
								echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
								echo 'AVAILABLE IN '; echo '<h1><a href="drinks4.php" style="color: black;">VENDING MACHINE 4</a></h1>';
								echo "</div>";
							}
                        }
                    }
}
?>
</body>
</html>