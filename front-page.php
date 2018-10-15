<!DOCTYPE html>
 <html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content=" <?php bloginfo('description'); ?>">

    <title><?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head(); ?>
    <style>
    	.showcase{
    		background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg')?>) no-repeat center center;
    	}

    </style>


  </head>
  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <?php wp_nav_menu(array(
            'theme_location' => 'Primary',
            'menu_class'      => 'navigator nav navbar-nav mr-auto',
          )); ?>
         <!--  <a class="blog-nav-item active" href="#">Home</a>
          <a class="blog-nav-item" href="#">New features</a>
          <a class="blog-nav-item" href="#">Press</a>
          <a class="blog-nav-item" href="#">New hires</a>
          <a class="blog-nav-item" href="#">About</a> -->

        </nav>
      </div>
    </div>

	<section class="showcase">
      <div class="container">
        <h1><?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme') ?></h1>
        <p><?php echo get_theme_mod('showcase_text', 'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam') ?></p>
        <a href="<?php echo get_theme_mod('btn_url', '#') ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text', 'Get Started')?></a>
      </div>
    </section>

    <section class="boxes">
      <div class="container">
        <div class="row">
          <div class="col-md-4">           
             <?php if(is_active_sidebar('box1')) : 
             	dynamic_sidebar('box1');
             		endif; ?>
          </div>

          <div class="col-md-4">
            
              <?php if(is_active_sidebar('box2')) : 
             	dynamic_sidebar('box2');
             		endif; ?>
            
          </div>

          <div class="col-md-4">
            
              <?php if(is_active_sidebar('box3')) : 
             	dynamic_sidebar('box3');
             		endif; ?>
            
          </div>
        </div>
      </div>
    </section>

<footer class="blog-footer">

      <p><?php echo Date("Y"); ?> - <?php bloginfo('name') ?></p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
  <?php wp_footer(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
  </body>
</html>