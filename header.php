<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="content-language" content="<?php bloginfo('language'); ?>">
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <meta name="copyright" content="Copyright <?php bloginfo('name');?> <?php echo date('Y');?>. All Rights Reserved.">
    <meta name="DC.subject" content="Our Mission is to be the National Center for Preserving, Viewing, and Learning about Exceptional Agrarian Art.">
	<meta name="DC.creator" content="Ashley Cameron">
	<meta name="google-site-verification" content="qUHjzw-kTHthbZ4T8wSMG2oYcup1h9BdgEAsb4yMskI" />
    <title><?php echo wp_title();?></title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/favicon.ico" />
    <link rel="image_src" href="http://manage.bonecreek.org/wp-content/themes/bonecreek/images/logo-login.png" />
    <!--[if lt IE 9]><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/ie.css"><!--<![endif]-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head();?>
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
    }(document, 'script', 'facebook-jssdk'));
</script>

<img src="<?php echo get_stylesheet_directory_uri() ?>/images/border.png" alt="border" style="width: 100%;height: 15px;vertical-align: top;display: block;">
<div id="page-wrap">
    <header id="header" role="banner" class="container-fluid">
        <div class="container">
          <form id="searchform" class="navbar-form navbar-right" role="search" action="<?php echo home_url( '/' ); ?>">
			  <div class="form-group">
			    <input type="text" id="s" class="form-control" placeholder="Search">
			  </div>
			  <button type="submit" id="searchsubmit" class="btn btn-default">Submit</button>
		  </form>

		  <nav id="social" role="navigation">
	          <h2>Social Navigation</h2>
	          <?php wp_nav_menu(array('theme_location' => 'social')); ?>
	      </nav>

	      <!-- FACEBOOK LIKE BUTTON -->
          <div class="like-btn">
          	<div class="fb-like" data-href="https://www.facebook.com/bonecreekmuseum" data-send="false" data-layout="button_count" data-width="300" data-show-faces="false" data-font="lucida grande"></div>
          	<p>Show your support on Facebook. Recommend us to friends &amp; family.</p>
          </div>
		  <a class="navbar-brand" href="<?php echo esc_url( home_url() ) ?>"><h1><?php bloginfo('name')?></h1></a>
</div>
		<nav class="navbar navbar-default row" role="navigation">
			<h2>Primary Navigation</h2>
				  <div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				      <span class="sr-only">Toggle navigation</span>
				      <span class="icon-bar"></span>
				      <span class="icon-bar"></span>
				      <span class="icon-bar"></span>
				    </button>

				  </div>

				  <!-- Collect the nav links, forms, and other content for toggling -->
				  <div class="collapse navbar-collapse navbar-ex1-collapse row">
				    <?php wp_nav_menu( array(
						  'menu' => 'primary',
						  'depth' => 2,
						  'container' => false,
						  'menu_class' => 'nav navbar-nav sticky',
						  'walker' => new wp_bootstrap_navwalker())
						); ?>
				  </div>
		</nav>

</header>