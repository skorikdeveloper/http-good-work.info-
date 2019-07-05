<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<?php wp_head(); ?>
</head>
<body id="page-<?php the_ID(); ?>" class="drawer drawer--left">
<div class="page-site">
	<header class="header">
        <div class="drawer-wrapper">
            <button type="button" class="drawer-toggle drawer-hamburger">
                <span class="sr-only">toggle navigation</span>
                <span class="drawer-hamburger-icon"></span>
            </button>
            <nav class="drawer-nav" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'mob-menu',
                    'container_class' => 'mob-menu' ) );
                ?>
            </nav>
        </div>
        <div class="container desktop-menu">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu',
                        'container_class' => 'header-main-menu' ) );
                    ?>
                </div>
                <div class="col-md-3 col-sm-3">
                    <?php wp_nav_menu( array( 'theme_location' => 'soc-menu',
                        'container_class' => 'header-soc-menu' ) );
                    ?>
                </div>
            </div>
        </div>
	</header>