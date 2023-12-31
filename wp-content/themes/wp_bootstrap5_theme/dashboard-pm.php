<?php
/**
 * Template Name: Dashboard
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
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Profile Page Template</title>
    <link rel="stylesheet" href="wp-content/themes/wp_bootstrap5_theme/assets/css/front.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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


<div class="container-fluid">
  <div class="row content">
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
                    <li ><a href="../../easyM/users"><ion-icon name="people" style="margin-right: 10px;font-size: 20px;"></ion-icon>Users</a></li>
        <li><a href="../../easyM/profile/"><ion-icon name="person-outline" style="margin-right: 10px;font-size: 20px; "></ion-icon>Profile</a></li>
        <li><a href="../../easyM/project"><ion-icon name="stats-chart" style="margin-right: 10px;font-size: 20px; "></ion-icon>Projects List</a></li>
        <li><a href="../../easyM/google-map"><ion-icon name="navigate" style="margin-right: 10px;font-size: 20px; "></ion-icon>User Location</a></li>
        <li><a href="#section3"><ion-icon name="settings" style="margin-right: 10px;font-size: 20px; "></ion-icon>Account Settings</a></li>
       
       
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
   <div class="col-sm-9 col-md-10">
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

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Status</th>
        <th scope="col">Date</th>
        <th scope="col">Operations</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $args = array(
          'orderby' => 'ID',
          'order' => 'ASC',
      );

      if(isset($_GET['search'])){
        $search_text = $_GET['search'];
        $args['search'] = '*'.$search_text.'*';
      }

      $users = get_users($args);
      $users = get_users(array('role__in' => array('developer')));
      foreach ($users as $user) { 
        $user_id = $user->ID;
        $registration_status = get_user_meta($user_id, 'registration_status', true);
        // only show active and pending users
      ?>
        <tr>
          <td>
            <?php echo $user_id; ?>
          </td>
          <td>
            <?php echo $user->display_name; ?>
          </td>
          <td>
            <?php echo $user->user_email; ?>
          </td>
          <td>
            <span 
              <?php if ($registration_status == 'pending') {
                  echo 'class="badge bg-danger"';
              } elseif ($registration_status == 'active' || $registration_status == 'Completed') {
                  echo 'class="badge text-bg-success"';
              } else {
                  echo 'class="badge text-bg-warning"';
              } ?>
            ><?php echo esc_html($registration_status); ?>
            </span>
          </td>
          <td>
            <?php echo '<span>' . esc_html(date("d-m-Y", strtotime($user->user_registered))) . '</span>'; ?>
          </td>
          <td>
            <div class="flex align-items-center list-user-action">
              <form action="" method="post">
               <?php  if($registration_status == "pending"|| $registration_status == "inactive" ){?>
                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                <button class="btn btn-success" type="submit" name="activate_user">Activate</button>
                <?php }?>
                <?php if ($registration_status == 'active') { ?>
                  <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                  <button class="btn btn-danger" type="submit" name="deactivate_user">Deactivate</button>
                <?php }?>
                
</form>
</div>
</td>
</tr>
<?php }?>
</tbody>

  </table>
</div>
<?php
// If user clicked activate user button
if (isset($_POST['activate_user'])) {
  $user_id = $_POST['user_id'];
  update_user_meta($user_id, 'registration_status', 'active');
}

// If user clicked deactivate user button
if (isset($_POST['deactivate_user'])) {
  $user_id = $_POST['user_id'];
  update_user_meta($user_id, 'registration_status', 'inactive');
}


?>


<?php
$users = get_users(array('role__in' => array('developer')));

if (isset($_POST['activate_user']) && isset($_POST['user_id'])) {
    $user_id = intval($_POST['user_id']);
    update_user_meta($user_id, 'registration_status', 'active');
    echo '<div class="alert alert-success">User activated successfully.</div>';
}
?>
<?php
$users = get_users(array('role__in' => array('developer')));

if (isset($_POST['deactivate_user']) && isset($_POST['user_id'])) {
    $user_id = intval($_POST['user_id']);
    update_user_meta($user_id, 'registration_status', 'inactive');
    echo '<div class="alert alert-success">User deactivated successfully.</div>';
}
?>
<!-- mmmmmmmmmmm -->









<?php

 //get_footer();

?>