<!DOCTYPE html>
<html lang="zh">
<head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="renderer" content="webkit"/>
      <meta name="force-rendering" content="webkit"/>
      <?php get_template_part( '/temp/tdk' );?>
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?Version=<?php $theme = wp_get_theme(); echo $theme->get( 'Version' );?>">
      <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/static/QUI3.0/css/ui.3.2.css"> 
      <?php wp_head();?>
<script src="<?php echo bloginfo('template_url'); ?>/static/js/jquery.1.83.js"></script>
<?php get_template_part( QUI_ThemePath().'/header' );?>