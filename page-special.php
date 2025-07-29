<?php get_header(); ?>
<?php
/* Template Name:专题集页面 */ 
// 调用自定义分类字段信息 // 方案一
		
		$terms = get_terms( 'special',array(
		    'orderby' => 'count',
		) );
		foreach ($terms as $item):
?>

	<li>
		<a href="<?php echo get_term_link($item);?>">
		<?php echo $item->name. 
			' ID:'.$item->term_id.
			' 数量:'.$item->count.
			' 描述:'.$item->description.
			' 别名:'.$item->slug.
			''; ?>
		</a>
	</li>
	<?php endforeach;?>
			

<?php get_footer(); ?>