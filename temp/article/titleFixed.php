<section class="ui-post-title ui-radius bgff" id="fix-title">
	    	<div class="plr20 flex aic jcfs">
	    		<h1 class="text-h1"><?php the_title(); ?></h1>
	    		<div class="ui-post-info mla">
	    			<?php echo get_avatar( get_the_author_email(), '40');?>
	    			<div class="ui-pc">
			            <p class="author"><?php the_author(); ?></p>
			            <p class="ui-pc">
			            	<time><?php the_time('Y年n月d日'); ?></time>
			            </p>
		        	</div>
	    		</div>
	    	</div>
	    	<div class="progress">
				<div class="progress-item" id="progress"></div>
			</div>
</section>