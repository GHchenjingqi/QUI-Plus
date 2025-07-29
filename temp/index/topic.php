<?php if(QUI_IndexTopic()){   ?>
	<section class="ui-title">专题</section>
	<?php $terms = get_terms( 'special',array(  'orderby' => 'count', ) );
	if($terms && count($terms)<=5){
	?>
	<div class="ui-topic overflow-hidden index mt20">
			<?php foreach ($terms as $item):?>
			<div class="col<?php echo QUI_IndexTopicNum();?>">
				<a href="<?php echo get_term_link($item);?>" title="<?php  echo $item->name; ?>" target="_blank">
					<img src="<?php echo getTaxonomyImageUrl( $item->term_id ); ?>" alt="" title=""/>
					<p><?php echo $item->name; ?></p>
				</a>
			</div>
			<?php endforeach;?>
	</div>
<?php }else{  $row = QUI_IndexTopicNum();  ?>
	<div class="ui-topic-slider ui-topic index mt20 p-r">
		<div class="swiper-container" id="topic-banner">
	      <div class="swiper-wrapper">
	      	<?php  foreach ($terms as $item):?>
				<div class="swiper-slide">
					<a href="<?php echo get_term_link($item);?>" title="<?php  echo $item->name; ?>" target="_blank">
						<img src="<?php echo getTaxonomyImageUrl( $item->term_id ); ?>" alt="" title=""/>
						<p><?php echo $item->name; ?></p>
					</a>
				</div>
			<?php endforeach;?>
		  </div>
		</div>
	</div>
	<script>
    let topSwiper = new Swiper('#topic-banner', {
      	direction: 'horizontal',
	    loop: true,
	    autoplay: {
		    disableOnInteraction: false,
		    delay: 5000,
		},
		centeredSlides:false,
	    slidesPerView: "auto",
	    spaceBetween: 20,
		slidesPerView: <?= $row ?>,
	    navigation: {
	      nextEl: '.ui-topic-slider .swiper-button-next',
	      prevEl: '.ui-topic-slider .swiper-button-prev',
	    },
    });
</script>
<?php }  } ?>

