

<!--BLOG SIDEBAR WIDGETS COLUMN-->
		<div class="side-bar col-md-4">

			<!--BLOG SEARCH-->
			<?php get_search_form() ?>

			<!--RECENT POST-->
			<div class="popular-post-widget">
				<div class="widget">
					<h5>Popular Post</h5>
					<ul class="media-list main-list">

                        <?php
                        $categories = get_the_category();

                        $rp_query = new WP_Query(array(
                                'posts_per_page'  => 3,
                                'post__not_in'    => array( $post->ID ),
                                'cat'             =>   $categories[0]->term_id

                        ));

                        if ($rp_query->have_posts()) {
                            while ($rp_query->have_posts()) {
                                $rp_query->the_post();
                                ?>

                                <li class="media">
                                    <a class="pull-left" href="<?php the_permalink(); ?>">

                                        <?php

                                        if (has_post_thumbnail()) {
                                            ?>
                                            <img class="media-object" src="http://placehold.it/110x90" alt="" >
	                                        <?php
                                        }

                                        wp_reset_postdata();
                                        ?>

                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading"><?php the_title() ?></h6>
                                        <p class="info">By <?php the_author() ?> | <?php comments_number('0'); ?></p>
                                    </div>
                                </li>

                                <?php
                            }
                        }

                        ?>

					</ul>
				</div>
			</div>


			<!--BLOG CATEGORIES-->
			<div class="categories-widget">
				<div class="widget">
					<h5>Blog Categories</h5>
					<div class="row">

                            <?php
                            $categories = get_categories();
                            foreach (array_chunk($categories, 5, true) as $category) {
                                echo '<div class="col-md-6"><ul class="list-unstyled">';
                                foreach($category as $cat) {
                                    echo '<li><a href="' . get_category_link($cat->term_id) . '">' . $cat->name . '</a></li>';
                                }
                                echo '</ul></div>';
                            }
                            ?>
					</div>
				</div>
			</div>

			<!--SIDE WIDGET-->
			<div class="text-section-widget">
				<div class="widget">
					<h5>Text Section</h5>
					<p>
					 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci
						accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.
					</p>
				</div>
			</div>

			<!--TAGS-->
			<div class="tags-widget">
				<div class="widget">
					<h5>Tags</h5>
					<div class="tags">
						<?php wp_tag_cloud(); ?>
					</div>
				</div>
			</div>

		</div>

	</div>
</div>