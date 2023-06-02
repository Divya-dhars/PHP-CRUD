<html>
    <body>
        <?php
            $con=new mysqli("localhost","root","Divya29*","restaurant");
            $menu_id=$_POST['a'];
            $food_name=$_POST['b'];
            $price=$_POST['c'];
            $sql="INSERT INTO Menu(Menu_id,food_name,price)VALUES('$menu_id','$food_name','$price')";
            if($con->query($sql) === TRUE){
                echo "New record created successfully";
            }
            else{
                echo "Error: ".$sql."\n".$conn->error;
            }
        ?>
    </body>
</html>