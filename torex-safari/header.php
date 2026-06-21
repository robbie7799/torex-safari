<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="wrap">
    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" style="color:inherit;text-decoration:none"><?php bloginfo('name'); ?></a></h1>
    <nav class="site-nav">
      <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
    </nav>
  </div>
</header>
