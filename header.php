<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<?php if (is_search()) { ?><meta name="robots" content="noindex, nofollow" /> <?php } ?>
	<title><?php global $page, $paged; 
		wp_title( '|', true, 'right' );
		// Add the blog name.
		//bloginfo( 'name' );
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
		?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="Bone Creek Museum of Agrarian Art">
	<meta name="Copyright" content="Copyright Bone Creek Museum of Agrarian Art 2012. All Rights Reserved.">
	<meta name="DC.title" content="Bone Creek Museum of Agrarian Art">
	<meta name="DC.subject" content="Our Mission is to be the National Center for Preserving, Viewing, and Learning about Exceptional Agrarian Art.">
	<meta name="DC.creator" content="Ashley Cameron">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!--[if lt IE 9]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css"><!--<![endif]-->
    <link rel="image_src" href="http://manage.bonecreek.org/wp-content/themes/bonecreek/images/logo-login.png" /> 
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr-1.7.min.js"></script>    
    <?php if (is_home() || is_front_page()){ 
		wp_enqueue_script( 'slider' ); 
		wp_enqueue_script( 'ease' );
	} ?>
	<?php wp_head(); ?>
<meta name="google-site-verification" content="qUHjzw-kTHthbZ4T8wSMG2oYcup1h9BdgEAsb4yMskI" />
</head>
<body <?php body_class(); ?>>

<!-- FACEBOOK LIKE BUTTON javascript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- - - - - - - - - - - - --->
	<div id="top">
      <div id="contain">
        <ul id="social">
          <li><a id="fb" href="http://www.facebook.com/bonecreekmuseum" target="_blank">Facebook</a></li>
          <li><a id="tw" href="http://twitter.com/#!/bonecreekmuseum" target="_blank">Twitter</a></li>
          <li><a id="rss" href="http://feeds.feedburner.com/BoneCreekMuseumOfAgrarianArt?format=xml" target="_blank">RSS</a></li>
          <li><a id="li" href="http://www.linkedin.com/groups?about=&gid=2128221" target="_blank">LinkedIn</a></li>
          <li><a id="yt" href="http://www.youtube.com/user/BoneCreekMuseum" target="_blank">YouTube</a></li>
        </ul>
        <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
           <fieldset>
             <input type="text" value="search" name="s" id="s" onblur="if (this.value == ''){this.value = 'search';}" onfocus="if (this.value == 'search'){this.value = '';}" />
             <input type="submit" id="searchsubmit" alt="Search" tabindex="2"/>
           </fieldset>
        </form>
       </div>
    </div>
	<div id="page-wrap">
        <header id="header-main" role="banner">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/border.png">
          <hgroup>
            <h1 id="site-title"><a href="<?php echo get_bloginfo('url'); ?>" title="<?php echo get_bloginfo('name'); ?>" rel="home"><?php echo get_bloginfo( 'name' ); ?></a></h1>
          </hgroup>
          <!-- FACEBOOK LIKE BUTTON -->
          <div class="like-btn">
          	<div class="fb-like" data-href="https://www.facebook.com/bonecreekmuseum" data-send="false" data-layout="button_count" data-width="300" data-show-faces="false" data-font="lucida grande"></div>
          	<p>Show your support on Facebook. Recommend us to friends &amp; family.</p>
          </div>
 	   </header>
        <nav id="nav-primary" role="navigation">
          <h2>Primary Navigation</h2>
          <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </nav>