<?php $cats = wp_get_post_categories($post->ID); if ($cats) {  ?>
   <aside class="ui-relate mt20">
   	<section class="ui-title">猜你喜欢</section>
   	<section class="ui-relate-list padding bgff ui-radius ui-border">
   		<ul>
            <?php $cat = get_category( $cats[0] ); $first_cat = $cat->cat_ID;
                $args = array( 'category__in' => array($first_cat),
                            'post__not_in' => array($post->ID),
                            'showposts' => 6,
                            'caller_get_posts' => 1);
                query_posts($args); if (have_posts()) :  while (have_posts()) : the_post(); update_post_caches($posts); ?>
                <li class="col2">
                	<a class="text-h1" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute();?>">
                		<?php the_title(); ?> 
                		</a>
                </li>
                <?php endwhile; else : ?>
                <li class="col2">暂无相关文章!</li>
                <?php endif; wp_reset_query();  ?>
        </ul> 
   	</section>
   </aside>
<?php  } ?> 