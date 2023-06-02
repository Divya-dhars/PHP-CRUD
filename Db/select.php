<html>
    <body>
        <?php
        $con=new mysqli("localhost","root","Divya29*","restaurant");
        $sql="SELECT * FROM Menu";
        if($res=mysqli_query($con, $sql)) {
            if(mysqli_num_rows($res) > 0) {
                echo "<table border='1'>";
                echo "<tr>";
                echo "<th>Menu_id</th>";
                echo "<th>Food_name</th>";
                echo "<th>Price</th>";
                echo "</tr>";
                while($row = mysqli_fetch_array($res)) {
                    echo "<tr>";
                    echo "<td>".$row['Menu_id']."</td>";
                    echo "<td>".$row['food_name']."</td>";
                    echo "<td>".$row['price']."</td>";
                    echo "</tr>";
                }
                echo "</table>";
                mysqli_free_result($res);
            }
            else {
                echo "No matching records are found.";
            }
        }
        else {
            echo "ERROR: Could not able to execute $sql. ".mysqli_error($link);
        }
        mysqli_close($con);
        ?>
    </body>
</html>