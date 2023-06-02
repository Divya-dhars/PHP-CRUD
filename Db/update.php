<html>
    <body>
        <?php
        $con=new mysqli("localhost","root","Divya29*","restaurant");
        $food_name=$_POST['a'];
        $price=$_POST['b'];
        $sql="UPDATE menu SET food_name='$food_name' WHERE price='$price'";
        if($con->query($sql)===TRUE){
            echo "record updated successfully";
        }
        else{
            echo "Error: ".$sql."\n".$conn->error;
        }
        ?>
    </body>
</html>