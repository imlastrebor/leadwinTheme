<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
    <header>

    <?php 
    
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
     
    if ( has_custom_logo() ) {
        echo '<img class="logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . " logo" . '">';
    } else {
        echo '<h1>' . get_bloginfo('name') . '</h1>';
    }

    
    ?>

<!--    ---| Navbar |---          
           

<div class="topnav" id="myTopnav">
  <a href="#introduction"> Esittely </a>
  <a href="#team"> Tiimi </a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
 -->
    </header>
