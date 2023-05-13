<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RhodiumEquity
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
	<?php wp_head(); ?>
	<style>
        
        .pagebox{margin-top: 50px;padding-top:10px; box-shadow: 5px 4px 8px 10px rgba(0, 0, 0, 0.2), 5px 6px 6px 0 rgba(0, 0, 0, 0.19);}
        .navmenu{padding: 30px;}
        .logo{padding: 10px 0;}
        .banner img{border:1px solid lightgreen; width: 100%;}
        .content{padding: 30px 0 100px;}
        .footer{text-align: right; margin-top: 50px;}
        .footer p{color:gray; }
		.widget-heading{background-color:#062746; padding:10px; color:white !important}
		ul{margin:10px}
		.main-navigation ul {float:right}
		.main-navigation li {padding: 0 10px;}
		.main-navigation li a{color: #062746;}
		.entry-header h1{color:#062746; font-weight:bold; margin:0;}
		.widget{margin:0;}
        .footer a {text-decoration:none;color:GRAY}
    </style>
</head>

<body style= "background:<?php echo ( 'custom-background' ); ?>"<?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<div class="container pagebox" style="background:white">
    <div class="row">
        <div class="col-md-3">
            <div class="logo">
                <!--<img src="RhodiumEquity.png" alt=""> -->
                <?php the_custom_logo();?>
            </div>
        </div>
        <div class="col-md-9">
            <div class="navmenu text-right">
               <!--- <p>Home  |  About  |  Acquistion Criteria  |  Values  |   Asset Criteria  |  Contact Us</p> -->
               <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'rhodiumequity-simple-clean-site' ); ?></button>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    )
                );
                ?>
            </nav>
            </div>
        </div>
    </div>



