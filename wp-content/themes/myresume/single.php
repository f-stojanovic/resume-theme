<?php get_header(); ?>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!--PRE LOADER-->
<div id="pre-loader" class="loading">
	<div class="loading-center">
		<div class="ripple-loader"></div>
	</div>
</div>

<!--NAVIGATION-->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand page-scroll" href="#page-top">Filip Stojanović | Blog Post</a>
		</div>

		<!--COLLECT THE NAV LINKS, FORMS, AND OTHER CONTENT FOR TOGGLING-->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right">
				<!--HIDDEN LI INCLUDED TO REMOVE ACTIVE CLASS FROM ABOUT LINK WHEN SCROLLED UP PAST ABOUT SECTION-->
				<li class="hidden">
					<a class="page-scroll" href="#page-top"></a>
				</li>
				<li>
					<a class="page-scroll" href="index-blog-home.html">Home</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
					   aria-expanded="false">Explore <span class="caret"></span></a>

					<?php
					if (has_nav_menu('secondary')) {
						$a = wp_nav_menu(array(
							'theme_location' => 'secondary',
							'container'     => false,
							'menu_class'    => 'dropdown-menu',
							'fallback_cb'   => false,
							'depth'         => 0
						));
					}
					?>

				</li>
			</ul>
		</div>
	</div>
</nav>


<main>

	<?php
	if (have_posts()) {
		while (have_posts()) {
			the_post();

			$author_ID = get_the_author_meta('ID');
	        $author_url = get_author_posts_url($author_ID);

            $categories = get_the_category();
            $category_id = $categories[0]->cat_ID;
            $category_name = get_cat_name($category_id);
	?>

	<!--PAGE CONTENT-->
	<div class="container">

		<div class="row">

			<!--BLOG POST CONTENT COLUMN-->
			<div <?php post_class('main-content col-md-8'); ?> id="<?php the_ID(); ?>">

				<!--BLOG POST-->

				<!--TITLE-->
				<h4><?php the_title() ?></h4>

				<!--AUTHOR-->
				<p>by <a href="<?php echo $author_url ?>"><?php the_author() ?></a> <span>|</span> <a href="#"><?php echo $category_name;?></a></p>

				<hr>

				<!--DATE/TIME-->
				<p><span class="ion-ios-timer-outline"></span> Posted on <?php echo get_the_date('F j Y'); ?> at <?php echo get_the_time(); ?></p>

				<hr>

				<!--PREVIEW IMAGE-->
				<div class="main-image">

					<?php
					if (has_post_thumbnail()) {
					?>
					<img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
					<?php
					}
					?>

					<div class="caption-and-link">
						<div class="caption">
							<h6 class="animated fadeInUp">Share</h6>
						</div>
						<div class="links animated fadeInUp delay0-2s">
							<!--LINKS-->
							<a href="#" target="_blank">Facebook</a>
							<a href="#" target="_blank">Twitter</a>
						</div>
					</div>
				</div>

				<hr>

				<!--POST CONTENT-->
				<p class="lead">
					<?php the_content(); ?>
				</p>

				<p>
					<?php the_content(); ?>
				</p>

				<blockquote>
					<p>
						<?php the_content(); ?>
					</p>
				</blockquote>

				<p>
					<?php the_content(); ?>
				</p>

				<hr>

				<!--POSTED COMMENTS-->
				<h5>Tags</h5>
				<hr>
				<div class="tags">
					<?php the_tags('', ' '); ?>
				</div>

				<hr>

				<!--POSTED COMMENTS-->
				<h5><?php comments_number('0'); ?> | 10 Shares | 12K Views </h5>
				<hr>

                <?php


                $comments = get_comments( array ( 'post_id' => get_the_ID() ) );
                foreach ($comments as $comment) {


                    ?>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="http://placehold.it/110x90" alt="">
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading"><?php comment_author() ?>
                                <small>Posted <?php comment_date() ?></small>
                            </h6>
                            <span class="comment">
                            <?php comment_text(); ?>
                        </span>
                            <div class="comment-options">12 Likes - <a href="#">Like</a> <span>|</span> <a href="#">Reply</a></div>
                        </div>
                    </div>

                    <?php
                }
                the_comments_pagination();
                ?>

			<?php
		}
	}
	?>
				<hr>

				<?php

				if (comments_open() || get_comments_number()) {
					comments_template();
				}

				?>

			</div>

			<!--BLOG SIDEBAR WIDGETS COLUMN-->
			<?php get_sidebar() ;?>


		</div>
	</div>

	<hr class="finish-line">

</main>

<!--SCROLL TO TOP-->
<div id="scroll-up" class="scroll-top animated fadeInUp">
	<i class="ion-ios-arrow-up"></i>
</div>


<?php get_footer(); ?>