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

if (isset($_POST['search'])) {
    $searching=$_POST['search'];
    $searching=preg_replace("#[^a-z]#i", "", $searching);




    $sql="SELECT vend FROM product WHERE name LIKE '%$searching%' ;
                    $result = $con-> query($sql);
                    $count=mysql_num_rows($result);
                    
                    $row = $result->fetch_assoc();
                    
                    if( $count == 0)
                    {
                    echo 'no such item available';
                    }
                    else
                    {
                        while ($row)
                        {
                        if ($row[vend] == 1)
                        /* just like this you can look for each product if yes then provide html link using <a> tag for each drinks1 / drinks2 etc*/
                        }
                    }
}

?>

<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <form action="search.php" method="post">
        <input type="search" name="search" placeholder="Search for your Choice">
        <input type="submit" value="Search">


    </form>


</body>
</html>