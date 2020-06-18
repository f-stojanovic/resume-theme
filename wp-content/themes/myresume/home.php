<?php
/*
Template Name: Blog Page
*/
?>

<?php get_header() ;?>

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
			<a class="navbar-brand page-scroll" href="#page-top">Filip Stojanović | Blog</a>
		</div>

		<!--COLLECT THE NAV LINKS, FORMS, AND OTHER CONTENT FOR TOGGLING-->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right">
				<!--HIDDEN LI INCLUDED TO REMOVE ACTIVE CLASS FROM ABOUT LINK WHEN SCROLLED UP PAST ABOUT SECTION-->
				<li class="hidden">
					<a class="page-scroll" href="#page-top"></a>
				</li>
				<li>
					<a class="page-scroll" href="#page-top">Home</a>
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
	<div class="container">

		<div class="row">

			<!--BLOG ENTRIES COLUMN-->
			<div class="main-content col-md-8">

				<h5 class="page-header">Recent Posts</h5>

				<div class="post-block">
					<div id="masonry-blog" class="blog-posts">

                        <?php
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();

	                            get_template_part('partials\post\content-excerpt');
                            }
                        }
                        ?>

					</div>
				</div>

				<!--PAGER-->
				<div class="blog-pagination">
					<ul class="pagination pagination-large">
						<?php numeric_posts_nav(); ?>
					</ul>
				</div>

			</div>

			<?php get_sidebar() ;?>

	<hr class="finish-line">

</main>

<?php get_footer() ;?>



