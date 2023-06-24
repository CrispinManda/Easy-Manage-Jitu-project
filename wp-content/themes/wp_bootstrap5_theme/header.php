<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset="<?php echo bloginfo('charset');?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <!-- Favicon and Touch Icons -->
          <link rel="icon" type="image/png" sizes="512x512" href=" <?php echo esc_url(get_template_directory_uri() .'/assets/favicon/kiit.jpeg')?>">
        <title><?php echo bloginfo('title');?></title>
        <?php wp_head();?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.6
        .0/jquery.min.js"></script>
    </head>
    <body <?php body_class();?>>

    <!-- <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        
        <div class="collapse navbar-collapse" id="main-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
        </div>
        <?php
            //if (is_user_logged_in()) : 
            ?>
                <!-- <a role="button" class="btn btn-outline-primary" href=" <?php //echo wp_logout_url(get_permalink()); ?>">Log Out</a> -->
            <?php 
           // else : 
            ?>
                <!-- <a role="button" class="btn btn-outline-primary" href="<?php //echo wp_login_url(get_permalink()); ?>">Log In</a> -->
            <?php 
            //endif;
        ?>
    </div>
</nav>
    
