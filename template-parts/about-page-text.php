<section class="about-text">
	<div class="container">
		<div class="about-text__content allStyleText">
			<?php the_post(); the_content()?>
		</div>
		<div class="about-text__links">
			<?php 
			global $post;
			$child_pages = get_pages(array('child_of' => $post->ID));
			foreach ($child_pages as $page):?>
				<a href="<?php echo get_permalink($page->ID);?>" class="action-btn"><?php echo $page->post_title;?></a>
			<?php endforeach; wp_reset_postdata();?>
			<a href="<?php echo get_category_link(2)?>" class="action-btn">Блог</a>
		</div>
	</div>
</section>