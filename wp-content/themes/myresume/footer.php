<!--SCROLL TO TOP-->
<div id="scroll-up" class="scroll-top animated fadeInUp">
    <i class="ion-ios-arrow-up"></i>
</div>

<footer id="footer" class="section">
	<div class="container">
		<div class="row">

			<div class="footer-infos col-md-3">
				<h5>Filip Stojanović</h5>
				<p>PHP Developer</p>
				<p>Belgrade, Serbia</p>
				<?php
				if (get_theme_mod('ju_email_handle')) {
				     ?>
                    <p id="zoom-fade"><a href="mailto:<?php echo get_theme_mod('ju_email_handle')?>"><?php echo get_theme_mod('ju_email_handle')?></a></p>
                    <?php
				  }
				?>
			</div>

			<div class="footer-infos desktopContent col-md-3 col-md-push-1" style="padding-top: 50px; padding-left: 60px;">
				<p style="text-align: center;"><div class="led-yellow" style="float: left; margin-top: 3px;"></div>
				<span class="led-yellow-span" style="padding-left: 10px;">Available for freelance.</span>
				</p>
			</div>

            <div class="phoneContent"></div>

			<div class="footer-socials col-md-3 col-md-push-3">
				<h5>Explore</h5>
				<!--LINKS-->
				<ul class="site-links">
					<li><a class="page-scroll" href="#details"><span></span >Bio</a></li>
					<li>| <a href="index-portfolio.html" data-toggle="modal" data-target="#modalPush">Portfolios</a> |</li>
					<li><a href="index-blog-home.html" data-toggle="modal" data-target="#modalPush">Blog</a></li>
				</ul>
				<!--SOCIAL LINKS-->
				<ul class="col-md-12 social-list">

                    <?php
                    if (get_theme_mod('ju_email_handle')) {
                    ?>
                    <li><a href="mailto:<?php echo get_theme_mod('ju_email_handle')?>"><i class="ion-ios-email-outline"></i></a></li>
					<?php
					}

                    if (get_theme_mod('ju_github_handle')) {
                        ?>
                        <li><a href="<?php echo get_theme_mod('ju_github_handle')?>" target="_blank"><i class="ion-social-github-outline"></i></a></li>
	                    <?php
                    }

                    if (get_theme_mod('ju_linkedin_handle')) {
	                    ?>
                        <li><a href="<?php echo get_theme_mod('ju_linkedin_handle')?>" target="_blank"><i class="ion-social-linkedin-outline"></i></a></li>
	                    <?php
                    }

                    if (get_theme_mod('ju_skype_handle')) {
	                    ?>
                        <li><a href="skype:live:<?php echo get_theme_mod('ju_skype_handle')?>?call"><i class="ion-social-skype-outline"></i></a></li>
	                    <?php
                    }

                    ?>

				</ul>
				<p>Copyright &copy; Filip Stojanović | CV 2020</p>
			</div>

		</div>
	</div>
</footer>

<!--Modal: modalPush-->
<div class="modal fade hidden-md" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
	<div class="modal-dialog modal-notify modal-info" role="document">
		<!--Content-->
		<div class="modal-content text-center">
			<!--Header-->
			<div class="modal-header d-flex justify-content-center">
				<p class="heading"></p>
			</div>

			<!--Body-->
			<div class="modal-body">

				<i class="fas fa-bell fa-4x animated rotateIn mb-4"></i>

				<p>Currently in the making. :)</p></br>

			</div>

			<!--Footer-->
			<div class="modal-footer flex-center">
				<a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">Close</a>
			</div>
		</div>
		<!--/.Content-->
	</div>
</div>
<!--Modal: modalPush-->

<?php wp_footer(); ?>

</body>
</html>
