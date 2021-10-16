<?php 

session_start();
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $conn = mysqli_connect("localhost", "root", "", "login_register");
    $query = "SELECT * FROM users WHERE id = '$id'";
    $make_query = mysqli_query($conn, $query);
    $car_query = "SELECT * FROM car WHERE user_id = '$id'";
    $get_cars = mysqli_query($conn, $car_query);
    while ($this_user = mysqli_fetch_assoc($make_query)) {
        $firstname = $this_user['firstname'];
    }

 ?>
<html>
<head>
    <meta charset="utf-8">
<style>
  #social #container {
  text-align: center;
}

#social #container ul {
  float: left;
}

#social #container ul li {
  float: left;
  padding-left: 10px;
  list-style-type: none;
  margin-left: 270px;
  font-size: 30px;
  width: 40px;
}
</style>








        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />   

        <link rel="stylesheet" type="text/css" href="css/styles.css" />  
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
 
        
</head>
    <body>
        <header>
            <div class="row">
            <div class="col-md-3 col-xs-12 profile"><p class="welcome">Dobrodošli <?php echo $firstname; ?></p></div>
            

                    
                

            

            <div class="inner_header">
            	<div class="logo_container">
            		<h1>info<span>SITE</span></h1>  

	            	<style>
	            	.inner_header{

	            		width: 1000px;
	            		height: 100%
	            		display:block;
	            		margin:0 auto;
	            		background-color: red;
	            	}



	            	.logo_container{
	            		height: 100%;
	            		display: table;
	            		float: left;


	            	} 
	            	.logo_container h1{
	            		color:white;
	            		height: 100%;
	            		display: table-cell;
	            		vertical-align: middle;
	            		font-family: 'Montserrat';
	            		font-size: 32px;
	            		font-weight: 200;

	            	}   
	            	.logo_container h1 span{
	            		font-weight: 1000;
	            	</style>



            	</div>
            
        </header>
            <div class="container">            
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="#home" class="nav-link active" data-toggle="tab">Naslovna strana </a></li>
                    <li class="nav-item"><a href="#new" class="nav-link" data-toggle="tab">Registruj vozilo</a></li>
                    <li class="nav-item"><a href="#view" class="nav-link" data-toggle="tab">Vidi Moje  Registracije</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            <div class="row">
                <div class="col-xs-12 col-md-9 col-centered">
                        
                        <div class="tab-content">
                            <div class="tab-pane show active" id="home">
                            	<style>

                            	body {
								background-image: url("images/1.jpg");
								backdrop-filter: blur(5px);
								
                                background-position: absolute;


 

 
								}
							</style>


                            <div class="pomjeri footer">

                                <style>
                                    .pomjeri{
                                        padding: 285px;

                                    }

                                </style>




                            </div>


                            </div>
                            <div class="tab-pane" id="new">
                                <div class ="dole">
                                    <style>
                                        .dole{
                                        padding: 40px;

                                    }

                                    </style>
                                    

                                </div>
                            
                                <form method="post" action="php_scripts/new_car.php">
                                    <h4 class="text-center"> Registruj se</h4>
                                    <input type="number" name="Numb" placeholder="Numb" class="form-control" required/>

                                    <input type="text" name="Tip_registracije" placeholder="Tip_registracije" class="form-control" required/>
                    
                                    <input type="text" name="Snaga_vozila" placeholder="Snaga_vozila" class="form-control" required/>
                    
                                    <input type="text" name="Tip_goriva" placeholder="Tip_goriva" class="form-control" required/>

                                    <input type="text" name="Tip_vozila" placeholder="Tip_vozila" class="form-control" required/>
                                    
                                    <input type="number" maxlength="4" name="Godiste" placeholder="Godiste" class="form-control" required/>

                                    <input type="submit" name="submit" class="form-control"/>
                                </form>


                                <div  class=info>
                                    <style>
                                        .info{
                                            padding: 40px;
                                                }

                                    </style>
                                </div>

                            </div>
                            


                            <div class="tab-pane" id="view">
                                            
                                            
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th>Numb</th>
                                                        <th>Tip_registracije</th>
                                                        <th>Snaga_vozila</th>
                                                        <th>Tip_goriva</th>
                                                    
                                                        <th>Tip_vozila</th>
                                                        <th>Godiste</th>

                                                        <th>Akcija</th>
                                                    </tr>
                                                </thead>

                                            <?php 
                                            echo "<br/>";
                                           
                                         
                                            
                                            while($this_car = mysqli_fetch_assoc($get_cars)) {
                                                

                                                $Numb=$this_car['Numb'];
                                                $Tip_registracije = $this_car['Tip_registracije'];
                                                $Snaga_vozila = $this_car['Snaga_vozila'];
                                                $Tip_goriva = $this_car['Tip_goriva'];
                                                $Tip_vozila = $this_car['Tip_vozila'];
                                                $Godiste = $this_car['Godiste'];

                                                echo "<tr>


                                                    <td>".$Numb."</td>
                                                    <td>".$Tip_registracije."</td>
                                                    <td>".$Snaga_vozila."</td>
                                                    <td>".$Tip_goriva."</td>
                                                    <td>".$Tip_vozila."</td>
                                                    <td>".$Godiste."</td>
                                                    
                                                    <td><a href='delete.php?nu=$this_car[Numb]'>Delete</a></td> 

                                                </tr>";
                                                                                                
                                            }

                                        
                                            ?>
                                        </table>

                                        <div  class=def>
                                            <style>
                                                .def{
                                                    padding: 200px;
                                                }

                                            </style>
                                        </div>
                            </div>
                        </div>
            
            
                </div>
            </div>
            
        </div>

<!-- FOOTER SECTION -->
<footer id="footer" class="parallax-section">
  
        
               

<div id="social">
  <div id="container">
     <ul>
        <li>
           <a href="url" title="linkedin" target="_blank">
              <i class="fa fa-linkedin"></i>
           </a>
        </li>

        <li>
           <a href="url" title="twitter" target="_blank">
              <i class="fa fa-twitter"></i>
           </a>
        </li>

        <li>
           <a href="url" title="skype" target="_blank">
              <i class="fa fa-skype"></i>
           </a>
        </li>

        <li>
           <a href="url" title="instagram" target="_blank">
              <i class="fa fa-instagram"></i>
           </a>
        </li>
     </ul>
  </div>
</div>

          </div>
     </div>
</footer>

        <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            // let bar = document.querySelector('.nav');
            // let list = document.querySelectorAll('li');
            // bar.addEventListener('click', function(e){
            //     e.preventDefault();
            //     for(let i=0; i<list.length; i++) {
            //         list[i].classList.remove('active');
            //     }
            //     e.target.classList.add('active');
            // });
            $(document).ready(function() {
                $("li a").click(function(e) {
                    $(".tab-content div").removeClass("show");
                    // e.preventDefault();
                    $(this).tab("show");
                })
            })
        </script>
        
    
    </body>


</html>
    
<?php    
    
}else{
    header("location: index.php");
}

?>