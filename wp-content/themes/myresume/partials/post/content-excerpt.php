<div class="blog-block col-md-6 col-sm-6">
	<div class="blog">
		<div class="preview-image">
			<?php
			if (has_post_thumbnail()) {
				?>
				<img src="<?php the_post_thumbnail_url();?>" alt="" >                                            <?php
			}
			?>
			<div class="caption-and-link">
				<div class="caption">
					<h6 class="animated fadeInUp"><?php echo get_the_date('F j Y'); ?></h6>
				</div>
				<div class="links animated fadeInUp delay0-2s">
					<!--SINGLE IMAGE-->
					<a href="#" target="_blank">50K+ Views</a>
					<!--LINK-->
					<a href="<?php the_permalink(); ?>" target="_blank">More</a>
				</div>
			</div>
		</div>

		<div class="text-content">
			<h6 class="heading"><?php the_title() ?></h6>
			<span>by <?php the_author() ?> | <?php comments_number('0'); ?> Comments | Design</span>
			<p>
				<?php the_excerpt(); ?>
			</p>
		</div>
	</div>
</div>