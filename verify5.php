<?php

$con = mysqli_connect('127.0.0.1','root','');
                    if(!$con)
                    {
                      echo "Not Connected";
                    }
                    if(!mysqli_select_db($con,'evending'))
                    {
                      echo "Not Selected";
                    }

                    $sql="SELECT count,checksum FROM product WHERE code=5";
                    $result = $con-> query($sql);
                    $row = $result->fetch_assoc();
                    

require('config.php');

session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

        if ($_POST['razorpay_payment_id']) {
            
        }
            $updated_count=$row['count'];
            $updated_count=$updated_count-1;
            

                $checksum_updated=$row['checksum'];
                $checksum_updated=$checksum_updated*$checksum_updated;
                

                $sl="UPDATE product SET count='$updated_count',checksum='$checksum_updated' WHERE code='5'";

              if( !mysqli_query($con,$sl) )
                {
                    echo 'no value updated';
                }

                echo "your promocode is = ";
                echo $checksum_updated;

               /* else
                {
                    echo 'updated values';
                }*/
                
        $slp="INSERT INTO checksum(checksum) VALUES ('$checksum_updated')";
        if( !mysqli_query($con,$slp) )
                {
                    echo 'no value updated';
                }

        }
        ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
@media screen and (max-width:640px) {
  #out{margin-left:520px;}
  #p{margin-left:200px; width:35%;}
  
}
.nav  
{	
	
	width:100%;
	height:90px;
	position:absolute;
	top:0; left:0; color:white; z-index:7; font-family:verdana; -webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
		background-color: #3d5b99;
}
.x {
	
	width: 30%;
    margin-right: 0px;
    margin-left: 400px;
	margin-top: 300px;
	padding: 20px;
	border: 1px solid #102744;
	background-color: #3d5b99;}
	
.profile_info div {
	display: inline-block; 
	margin: 0px;margin-top:90px;background:#3d5b99;margin-right: 0px;
    margin-left: 1275px;
}
.profile_info:after {
	content: "";
	display: block;
	clear: both;
}
</style>
</head>		
<body background="y.jpg">
	<div class="nav"><h1>VENDX</h1> </div>
	<div class="profile_info">

			<div id="out">
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong style="color: white;"><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: white;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	<div class="x"  id="p"><strong style="color: white;" "font-size:100%"><?php echo "your promocode is = "; ?><?php echo $checksum_updated; ?></strong></div>
	
</body>
</html>