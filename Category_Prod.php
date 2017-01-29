<?php
    //Connect to server
    $con = mysqli_connect("localhost","root","","petshop");
    // Check connection
    if (!$con)
    {
        echo "Failed to connect to MySQL.";
    }
    session_start();
    $sqldog="SELECT name,price,descrip,img_path FROM product p, prod_image pi, category_product c WHERE p.img_id = pi.img_id AND p.prod_id = c.prod_id AND c.category='Dog'";
    $resultdog = mysqli_query($con,$sqldog);
    $sqlcat="SELECT name,price,descrip,img_path FROM product p, prod_image pi, category_product c WHERE p.img_id = pi.img_id AND p.prod_id = c.prod_id AND c.category='Cat'";
    $resultcat = mysqli_query($con,$sqlcat);
    $sqlhamster="SELECT name,price,descrip,img_path FROM product p, prod_image pi, category_product c WHERE p.img_id = pi.img_id AND p.prod_id = c.prod_id AND c.category='Hamster'";
    $resulthammy = mysqli_query($con,$sqlhamster);
    $sqlbird="SELECT name,price,descrip,img_path FROM product p, prod_image pi, category_product c WHERE p.img_id = pi.img_id AND p.prod_id = c.prod_id AND c.category='Bird'";
    $resultbirdy = mysqli_query($con,$sqlbird);
    
    ?>

<html>	
	<head>
		<title>Category Products</title>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   
        <script src="assets/js/scripts.js"></script>
        <style>
			@font-face{
				font-family: headingfont;
    			src: url(Fonts/Biko_Black.otf);
				}
			@font-face{
				font-family:calibri;
				src: url(Fonts/calibrib.ttf);
				}
			@font-face{
				font-family:Candara;
				src: url(Fonts/Candara.ttf);
				}
            
			.container-fluid
            {
				background: antiquewhite;
				margin-top:6%;
				margin-bottom:6%;
            }
                        
            h3
            {
				text-align:center;
				font-weight:400;
				font-size:50px;
				padding:2%;
			}
			
			h6{
                text-align:center;
				font-family: headingfont,arial,sans-serif;
				display:inline;
				font-size: 20px;
				
			}
            .center
            {
                margin: auto;
                width: 60%;
                border: 3px solid #73AD21;
                padding: 10px;
            }   
                        
            .page-header
			{
				color: background;
			}
			.imgsize
            {
                height: 100px;
                width: 100px;
            }
		</style>
    </head>
	<body>
        <section id="dog">
            <div class="container">
            <div class="panel panel-warning">
                <div class="panel-heading">Dog Products
                    <a href="PetKart.php" style="float:right">
                        <span class="glyphicon glyphicon-home"></span>
                    </a>
                </div>
                <div class="panel-body">
                    <center><table class="table table-striped"width="800" border="12" cellpadding="10" cellspacing="15">
                    <tr>
                    <th>What it's called</th>
                    <th>What it costs</th>
                    <th>What it is</th>
                    <th>What it looks like</th>
                    </tr>
                    <?php
                        while($row = mysqli_fetch_array($resultdog)) 
                        {
                            $name = $row['name'];
                            $price = $row['price'];
                            $description = $row['descrip'];
                            $image = $row['img_path'];
                            echo "<tr><td>".$name."</td><td>".$price."</td><td>".$description."</td>";
                            echo "<center><td><img src='$image' class='img-circle imgsize'></td></center></tr>";
                        }
                        echo "</table>";
                       
                    ?>
                    </table> </center>
                </div>
            </div> <!--end div panel-success -->
            </div>
       </section> 
       <section id="cat">
            <div class="container">
            <div class="panel panel-success">
                <div class="panel-heading">Cat Products
                    <a href="PetKart.php" style="float:right">
                        <span class="glyphicon glyphicon-home"></span>
                    </a></div>
                <div class="panel-body">
                    <center><table class="table table-striped"width="800" border="12" cellpadding="10" cellspacing="15">
                     <tr>
                    <th>What it's called</th>
                    <th>What it costs</th>
                    <th>What it is</th>
                    <th>What it looks like</th>
                    </tr>
                    <?php
                        while($row = mysqli_fetch_array($resultcat)) 
                        {
                            $name = $row['name'];
                            $price = $row['price'];
                            $description = $row['descrip'];
                            $image = $row['img_path'];
                            echo "<tr><td>".$name."</td><td>".$price."</td><td>".$description."</td>";
                            echo "<center><td><img src='$image'class='img-circle imgsize'></td></center></tr>";
                        }
                        echo "</table>";
                      
                    ?>
                    </table> </center>
                </div>
            </div> <!--end div panel-success -->
            </div>
       </section> 
       <section id="hammy">
            <div class="container">
            <div class="panel panel-info">
                <div class="panel-heading">Hamster Products
                    <a href="PetKart.php" style="float:right">
                        <span class="glyphicon glyphicon-home"></span>
                    </a></div>
                <div class="panel-body">
                    <center><table class="table table-striped"width="800" border="12" cellpadding="10" cellspacing="15">
                    <tr>
                    <th>What it's called</th>
                    <th>What it costs</th>
                    <th>What it is</th>
                    <th>What it looks like</th>
                    </tr>
                    <?php
                        while($row = mysqli_fetch_array($resulthammy)) 
                        {
                            $name = $row['name'];
                            $price = $row['price'];
                            $description = $row['descrip'];
                            $image = $row['img_path'];
                            echo "<tr><td>".$name."</td><td>".$price."</td><td>".$description."</td>";
                            echo "<center><td><img src='$image'class='img-circle imgsize'></td></center></tr>";
                        }
                        echo "</table>";
                       
                    ?>
                    </table> </center>
                </div>
            </div> <!--end div panel-success -->
            </div>
       </section> 
       <section id="birdy">
            <div class="container">
            <div class="panel panel-warning">
                <div class="panel-heading">Bird Products
                    <a href="PetKart.php" style="float:right">
                        <span class="glyphicon glyphicon-home"></span>
                    </a></div>
                <div class="panel-body">
                    <center><table class="table table-striped"width="800" border="12" cellpadding="10" cellspacing="15">
                    <tr>
                    <th>What it's called</th>
                    <th>What it costs</th>
                    <th>What it is</th>
                    <th>What it looks like</th>
                    </tr>
                    <?php
                        while($row = mysqli_fetch_array($resultbirdy)) 
                        {
                            $name = $row['name'];
                            $price = $row['price'];
                            $description = $row['descrip'];
                            $image = $row['img_path'];
                            echo "<tr><td>".$name."</td><td>".$price."</td><td>".$description."</td>";
                            echo "<center><td><img src='$image'class='img-circle imgsize'></td></center></tr>";
                        }
                        echo "</table>";
                       
                    ?>
                    </table> </center>
                </div>
            </div> <!--end div panel-success -->
            </div>
       </section> 
    </body>
</html>