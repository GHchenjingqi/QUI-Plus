	  <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/static/js/swiper.min.css"/>
	  <script src="<?php echo bloginfo('template_url'); ?>/static/js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
	  <link rel="stylesheet" type="text/css" href="<?php echo QUI_TempUrl().'static/style.css';?>"/>
<?php get_template_part( '/theme/style' );?>
</head>
<body <?php body_class(); ?>>
	<section class="warp">
	<header id="header">
		<?php get_template_part('/temp/top'); ?>
		<section class="ui-header bgff shadow">
			<main>
				<section class="ui-box flex jcfs aic">
					<?php get_template_part('/temp/logo').get_template_part('/temp/menu').get_template_part('/temp/welcome').get_template_part('/temp/search');?>
				</section>
			</main>
		</section>
	</header>
	<script>document.querySelector(".warp").style.visibility="hidden"</script>