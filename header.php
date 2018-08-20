<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">

	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.png" type="image/png">

    <?php if(is_home()) : ?>
    <title><?php bloginfo('name'); ?></title>
    <?php else : ?>
    <title><?php wp_title('', true,''); ?> · Libbey</title>
    <?php endif;?>
	 <?php wp_head(); ?>
  </head>
 <body>
 	 <a href="javascript:void(0);" id="return-to-top">
      <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </a>

  		<?php include('include-main-nav.php'); ?>
