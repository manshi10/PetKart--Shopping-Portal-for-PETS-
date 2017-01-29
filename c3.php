<?php
    //Connect to server
    $con = mysqli_connect("localhost","root","","petshop");
    // Check connection
    if (!$con)
    {
        echo "Failed to connect to MySQL.";
    }
    $sqlc3="SELECT man_id,name,details,contact FROM seller WHERE prod_id = any(SELECT price from product where price > 1000) ";
    $resultc3 = mysqli_query($con,$sqlc3);
?>

<center><table class="table table-striped"width="800" border="12" cellpaddin="10" cellspacing="15">
                    <tr>
                    <th>Seller ID</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Contact</th>
                    
                    </tr>
                    </tr>
                    <?php
                        while($row = mysqli_fetch_array($resultc3)) 
                        {
                            $name = $row['name'];
                            $details = $row['details'];
                            $contact = $row['contact'];
                            $man_id = $row['man_id'];
                            echo "<tr><td>".$man_id."</td><td>".$name."</td><td>".$details."</td>";
                            echo "<center><td>".$contact."</td></center></tr>";
                        }
                        echo "</table>";
                       
                    ?>
                    </table> </center>    
