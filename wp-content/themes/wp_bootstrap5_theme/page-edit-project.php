<?php
/**
 * Template Name: Map
 */
get_header();
?>
<style>
		.homepage-heading {
	width: 100%;
	padding-top: 1vw;
	display: flex;
	justify-content: space-between;
	align-items: center;
  background-color:#37362A;
    
}
.heading2 {
	display: flex;
	justify-content: space-evenly;
	align-items: center;
	gap: 450px;
    font-family: Arial, Helvetica, sans-serif;
    
}
.links {
	display: flex;
	justify-content: space-evenly;
    gap: 50px;
   
}
.links a {
  color:white;
 
}


.list {
	margin: 20px;
	list-style: none;
  color:white;
 
}
.brand img{
  margin:15px;
  width: 130px;
  height:80px;
}
a {
	text-decoration: none;
	color: #090D5A;
	display: inline-block;

}
.btns{
	color: #fff;
	padding: 5px;
}
.login{
	background-color: #090D5A;
	color: #fff;
	border-radius: 5px	;
}
	</style>



<head>
<link rel="stylesheet" href="wp-content/themes/wp_bootstrap5_theme/assets/css/front.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  
    .row.content {height: 550px}
    

    .sidenav {
      background-color: #f1f1f1;
      height:100%;
      margin-top:20px;
      background-color: #37362A;
      color:white;
    }
    .topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#37362A;
  margin-top:-70px;

}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 50px;
  text-decoration: none;
  margin-left: 100px;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #37362A;}

ul.topnav li.right {float: right;}

 
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>

<style>
    #nav{
        height: 300px;
    }
    .nav .navbar-nav{
        display: inline;
    }
</style>


< class="container-fluid">
  < class="row content">
    <div class="col-sm-3 col-md-2  sidenav hidden-xs">
  
      <ul class="nav nav-pills ">
      <li ><a href="">Dashboard                <h4 class="my-5 text-center text-light">
                        <?php global $current_user; wp_get_current_user(); ?>
                        <?php 
                            if ( is_user_logged_in() ) { 
                            echo 'Welcome ' . $current_user->user_login . "\n"; 
                            } else { 
                            wp_loginout(); 
                            } 
                        ?>
                    </h4></a></li>
        <li><a href="../../easyM/profile/">Profile</a></li>
        <li ><a href="../../easyM/project/">Projects List</a></li>
        <li><a href="#section3">Edit Project</a></li>
        <li><a href="#section3">Account Settings</a></li>
       
      </ul><br>
    </div>
    <br>
    <style>
        .col-sm-9 .well{
            margin-top:20px;
            
        }
        .nav-pills{
            display:flex;
            flex-direction: column;
            gap:20px;
        }
        #well{
          display:flex;
          flex-direction:row;
        
          justify-content:space-between;
          flex-wrap:wrap;
        }
        #well button{
          background-color:green;
          color:white;
          width:100px;
          border-radius:20px;
          border:1px solid black;
        }

        #well h6 button {
          background-color:green;
          color:white;
          width:100px;
          border-radius:20px;
          border:1px solid black;
        }
        #edit button{
          background-color:#10A54BC9;
          color:white;
          border:1px solid black;
          border-radius:5px;
          width:50px;


        }
        #red button{
          background-color:red;
        }
        
        
        
 
    </style>
   < class="col-sm-9 col-md-10">
  <div class="well" id="well" style='background-color: #37362A; color:white;'>
    <h4>Welcome to Easy Manage</h4>
    <a href="../../easyM/create-project/">
     <button><h6>Add Project</h6></button>
    </a>
    
    <br/><br/>
    <!-- <form action="" method="GET">
      <input type="text" name="search" placeholder="Search users...">
      <button  type="submit" >Search</button>
    </form> -->
    <button style="background-color: #960018; width: 70px; border-radius: 5px;">
  <a href="<?php echo wp_logout_url( home_url() ); ?>" style="color: white; text-decoration: none;">Logout</a>
</button>

  </div> 

  <div class="container">
  <!DOCTYPE html>
<html>
  <head>
    <title>Google Map Example</title>
    <style>
      #map {
        height: 400px;
        width: 100%;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script>
      function initMap() {
        // Create a new map centered on a specific location
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 37.7749, lng: -122.4194},
          zoom: 10
        });
        
        // Add a marker to the map
        var marker = new google.maps.Marker({
          position: {lat: 37.7749, lng: -122.4194},
          map: map,
          title: 'San Francisco'
        });
      }
    </script>
  </head>
  <body>
    <h1>Google Map Example</h1>
    <div id="map"></div>
    <script>
      // Call the initMap function to initialize the map
      initMap();
    </script>
  </body>
</html>

   
  
    </div>


  
    
    
   











