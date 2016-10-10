<!DOCTYPE html> 
<html <?php language_attributes(); ?>  class="no-js">
<head>
	<title><?php wp_title( '&laquo;', true, 'right' ); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<nav class="navbar navbar-top">
  <div class="container"> 
		<div class="col-md-12 col-sm-12 col-xs-12 nopad navbar-header">
		<div class="col-md-6 col-sm-6 col-xs-6 nopad">
      <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-top',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
		</div>  
		<div class="col-md-6 col-sm-6 col-xs-6 nopad"> 
			<ul class="list-inline social-icons">
			<li><a target="_blank" href="<?php echo of_get_option( 'facebook_url' ); ?>"><i class="fa fa-facebook"></i></a></li>
			<li><a target="_blank" href="<?php echo of_get_option( 'twitter_url' ); ?>"><i class="fa fa-twitter"></i></a></li>
			<li><a target="_blank" href="<?php echo of_get_option( 'skype_url' ); ?>"><i class="fa fa-skype"></i></a></li>
			<li><a target="_blank" href="<?php echo of_get_option( 'googleplus_url' ); ?>"><i class="fa fa-google-plus"></i></a></li>
			<li><a target="_blank" href="<?php echo of_get_option( 'linkedin_url' ); ?>"><i class="fa fa-linkedin"></i></a></li>
			</ul>
		</div>
		</div> 
	</div>
</nav>

<nav class="navbar navbar-default navbar-main navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> 
		 <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
          <img src="<?php header_image(); ?>" class="img-responsive"> </a>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
        <?php get_template_part('includes/navbar-search'); ?>
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-main',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav> 
<!--
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar, 
then you probably don't require a site title. Alternatively you can use the example below. 
See also the accompanying CSS example in css/bst.css .

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>
-->
