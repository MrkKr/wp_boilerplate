<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>

    <?php if ( is_admin_bar_showing() ) {?>
     <style>
        @media (min-width: 0px) {
            #header { top: 46px !important; }
        }
        @media (min-width: 768px) {
            #header { top: 32px !important; }
        }
     </style>
    <?php
    } else { ?>
     <style>
      #header { top: 0 !important; }
     </style>
    <?php } ?>
    
</head>
<body <?php body_class(); ?>>
    <header id="header">

        <nav class="navbar navbar-expand-lg navbar-dark mt-3 mb-0 bg-white text-white" role="navigation">

            <div class="container">

                <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php echo '<img src="'.get_bloginfo('template_directory').'/assets/img/logo.png" class="logo" alt="" />' ?></a></h1>

               <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#header-menu-collapse" aria-controls="header-menu-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span> Menu
                </button>

                <?php wp_nav_menu(array(
                    'menu'              => 'header_menu',
                    'theme_location'    => 'header_menu',
                    'depth'             => 2,
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'header-menu-collapse',
                    'menu_class'        => 'navbar-nav mx-auto text-center',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()));
                ?>
            </div>

        </nav>

    </header>