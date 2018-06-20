<?php
//selects name of product from database and store it in variables

 $con = mysqli_connect('127.0.0.1','root','');
                    if(!$con)
                    {
                      echo "Not Connected";
                    }
                    if(!mysqli_select_db($con,'evending'))
                    {
                      echo "Not Selected";
                    }

                    $sql="SELECT name FROM product WHERE code=1";
                    $result = $con-> query($sql);
                    $row = $result->fetch_assoc();
                    $value1=$row['name'];

                    $sql="SELECT name FROM product WHERE code=2";
                    $result = $con-> query($sql);
                    $row = $result->fetch_assoc();
                    $value2=$row['name'];

                    $sql="SELECT name FROM product WHERE code=3";
                    $result = $con-> query($sql);
                    $row = $result->fetch_assoc();
                    $value3=$row['name'];

                    $sql="SELECT name FROM product WHERE code=4";
                    $result = $con-> query($sql);
                    $row = $result->fetch_assoc();
                    $value4=$row['name'];

?>
