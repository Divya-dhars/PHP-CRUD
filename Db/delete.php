<html>
    <body>
        <?php
            $con=new mysqli("localhost","root","Divya29*","restaurant");
            $food_name=$_POST['a'];
            $sql="DELETE FROM Menu WHERE food_name='$food_name'";
            if($con->query($sql)===TRUE){
                echo "record deleted successfully";
            }
            else{
                echo "Error: ".$sql."\n".$conn->error;
            }
        ?>
    </body>
</html>