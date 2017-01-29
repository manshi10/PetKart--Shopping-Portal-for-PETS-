<?php
    //Connect to server
    $con = mysqli_connect("localhost","root","","petshop");
    // Check connection
    if (!$con)
    {
        echo "Failed to connect to MySQL.";
    }
    $sqlc4="SELECT cust_name FROM customer cu,cart ca WHERE  cu.cust_id = ca.cust_id and prod_id IN (SELECT prod_id from
    cart ca1,customer cu1 WHERE ca1.cust_id = cu1.cust_id AND cu1.cust_name ='Anupama' ) ";
    $resultc4 = mysqli_query($con,$sqlc4);
?>

<center><table class="table table-striped"width="800" border="12" cellpaddin="10" cellspacing="15">
                    <tr>
                    <th>What it's called</th>
                    <th>What it costs</th>
                   
                    </tr>
                    </tr>
                    <?php
                        while($row = mysqli_fetch_array($resultc4)) 
                        {
                            $cust_name = $row['cust_name'];
                            
                            
                            echo "<tr><td>".$cust_name."</td></tr>";
                        }
                        echo "</table>";
                       
                    ?>
                    </table> </center>    