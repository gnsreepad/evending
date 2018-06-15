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

                    $sql="SELECT count,checksum FROM product WHERE code=3";
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
                

                $sl="UPDATE product SET count='$updated_count',checksum='$checksum_updated' WHERE code='3'";

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
        }
        ?>
        