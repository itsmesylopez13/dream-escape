<html <?php language_attributes() ?>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title>Symon Lopez</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="200">
<meta property="og:image:height" content="200">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<?php wp_head(); ?> 
</head>
<body>
	<!-- header -->
<header>
	<div class="nav">
			<figure class="logo-container">
				<img src="<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/logo/crazydemo.png'); ?>">
			</figure>
			<div class="contact-info">
				<p><i class="fa fa-phone"></i> <?php echo get_theme_mod('showcase_phone', '+123 45567');?></p>
				<p>|</p>
				<p><i class="fa fa-envelope"></i>   <?php echo get_theme_mod('showcase_email', 'mail@crazydomains.com');?></p>
				<button class="btn"><i class="fa fa-paper-plane "></i> <?php echo get_theme_mod('btn_text', 'BOOK NOW');?></button>	
			</div>
	</div>	
</header>