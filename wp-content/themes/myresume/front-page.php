<?php
/*
Template Name: Home Page
*/
?>

<?php get_header() ;?>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<div id="magic-cursor">
    <div id="ball"></div>
</div>

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

            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            }else {
                ?>
                <a class="navbar-brand page-scroll" href="<?php echo home_url('/') ?>"><?php bloginfo('name'); ?></a>
	            <?php
            }
            ?>
        </div>

        <!--COLLECT THE NAV LINKS, FORMS, AND OTHER CONTENT FOR TOGGLING-->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!--HIDDEN LI INCLUDED TO REMOVE ACTIVE CLASS FROM ABOUT LINK WHEN SCROLLED UP PAST ABOUT SECTION-->
                <li class="hidden">
                    <a class="page-scroll" href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#home">Home</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">CV <span class="caret"></span></a>
                        <?php
                        if (has_nav_menu('primary')) {
                            $a = wp_nav_menu(array(
                                    'theme_location' => 'primary',
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

<!--HEADER-->
<header id="home" data-image-bg="<?php echo get_template_directory_uri() . '/assets/img/profile/b&w1.jpg'; ?>" data-image-overlay="rgba(27, 21, 21, 0.1)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="home-section">
                    <div data-aos="zoom-in" class="text-content">
                        <p>Explore My Skills</p>
                        <h3>PHP Developer</h3>
                        <p>Filip Stojanović | CV</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<main>

    <!--DETAILS SECTION-->
    <section id="details" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h5><span></span>Details</h5>
                    </div>
                    <div class="details-section">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-content">
                                    <p><i class="ion-ios-person-outline"></i> Full Name :<span>Filip Stojanović</span></p>
                                    <p><i class="ion-ios-timer-outline"></i> Age : <span>29</span></p>
                                    <p><i class="ion-ios-location-outline"></i> Location : <span>Belgrade, Serbia</span>
                                    <p><i class="ion-ios-telephone-outline"></i> Phone : <span id="zoom-fade"><a href="tel:+381631973141">+ 381 63 1973 141</a></span></p>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-content">

	                                <?php
	                                if (get_theme_mod('ju_email_handle')) {
		                                ?>
                                        <p><i class="ion-ios-email-outline"></i> Email : <span id="zoom-fade"><a href="mailto:<?php echo get_theme_mod('ju_email_handle')?>"><?php echo get_theme_mod('ju_email_handle')?></a></span>
                                        <?php
	                                }

	                                if (get_theme_mod('ju_github_handle')) {
		                                ?>
                                        <p><i class="ion-social-github-outline"></i> GitHub : <span id="zoom-fade"><a href="<?php echo get_theme_mod('ju_github_handle')?>" target="_blank">Projects I worked on from scratch.</a></span></p>
                                        <?php
	                                }

	                                if (get_theme_mod('ju_linkedin_handle')) {
		                                ?>
                                        <p><i class="ion-social-linkedin-outline"></i> LinkedIn :<span id="zoom-fade"><a href="<?php echo get_theme_mod('ju_linkedin_handle')?>" target="_blank">Take a glance at my profile.</a></span></p>
		                                <?php
	                                }

	                                if (get_theme_mod('ju_skype_handle')) {
		                                ?>
                                        <p><i class="ion-social-skype-outline"></i> Skype : <span id="zoom-fade"><a href="skype:live:<?php echo get_theme_mod('ju_skype_handle')?>?call">Sure, we can talk.</a></span></p>
		                                <?php
	                                }
	                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--INTRODUCTION SECTION-->
    <section id="introduction" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h5><span></span>Introduction</h5>
                    </div>
                    <div class="introduction-section">
                        <div class="text-content">
                            <p>
                             My goal is to become associated with a company where I can utilize and improve my skills
                                                                                                               and gain more knowledge while enhancing the company’s productivity and reputation.Seek to
                                work in an environment that will challenge me further; while allowing me to contribute to
                                the continued growth and success of the organization. Self-confident, meticulous, analytic,
                                funny and trustworthy are the things that you will find inspiring. Working as a part of any
                                team is the thing that I am truly passionate about.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--SKILLS SECTION-->
    <section id="skills" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h5><span></span>Skills</h5>
                    </div>
                    <div class="skills-section">
                        <div class="row">

                            <div class="skills-block col-md-6">
                                <div class="skills">

                                    <div class="skills-info">
                                        <span class="title">PHP</span>
                                        <span class="value"><b class="counter-numbers" data-from="0" data-to="80" data-speed="5000" data-refresh-interval="50"></b>%</span>
                                    </div>
                                    <div class="skills-bar" data-percent="80%"></div>
                                    <div class="skills-bar-bg"></div>

                                    <div class="skills-info">
                                        <span class="title">MySQL</span>
                                        <span class="value"><b class="counter-numbers" data-from="0" data-to="60" data-speed="5000" data-refresh-interval="50"></b>%</span>
                                    </div>
                                    <div class="skills-bar" data-percent="60%"></div>
                                    <div class="skills-bar-bg"></div>

                                    <div class="skills-info">
                                        <span class="title">WordPress</span>
                                        <span class="value"><b class="counter-numbers" data-from="0" data-to="90" data-speed="5000" data-refresh-interval="50"></b>%</span>
                                    </div>
                                    <div class="skills-bar" data-percent="90%"></div>
                                    <div class="skills-bar-bg"></div>

                                    <div class="skills-info">
                                        <span class="title">HTML 5</span>
                                        <span class="value"><b class="counter-numbers" data-from="0" data-to="95" data-speed="5000" data-refresh-interval="50"></b>%</span>
                                    </div>
                                    <div class="skills-bar" data-percent="95%"></div>
                                    <div class="skills-bar-bg"></div>

                                    <div class="skills-info">
                                        <span class="title">CSS 3</span>
                                        <span class="value"><b class="counter-numbers" data-from="0" data-to="75" data-speed="5000" data-refresh-interval="50"></b>%</span>
                                    </div>
                                    <div class="skills-bar" data-percent="75%"></div>
                                    <div class="skills-bar-bg"></div>

                                    <div class="skills-info">
                                        <span class="title">Bootstrap</span>
                                        <span class="value"><b class="counter-numbers" data-from="0" data-to="85" data-speed="5000" data-refresh-interval="50"></b>%</span>
                                    </div>
                                    <div class="skills-bar" data-percent="85%"></div>
                                    <div class="skills-bar-bg"></div>

                                </div>
                            </div>

                            <div class="skills-block col-md-6">
                                <div class="skills">

                                    <div class="skills-info">
                                        <span class="title">Git</span>
                                        <span class="value"><b class="counter-numbers" data-from="0" data-to="70" data-speed="5000" data-refresh-interval="50"></b>%</span>
                                    </div>
                                    <div class="skills-bar" data-percent="70%"></div>
                                    <div class="skills-bar-bg"></div>

                                    <div class="skills-info">
                                        <span class="title">Linux</span>
                                        <span class="value"><b class="counter-numbers" data-from="0" data-to="70" data-speed="5000" data-refresh-interval="50"></b>%</span>
                                    </div>
                                    <div class="skills-bar" data-percent="70%"></div>
                                    <div class="skills-bar-bg"></div>

                                    <div class="skills-info">
                                        <span class="title">Docker</span>
                                        <span class="value"><b class="counter-numbers" data-from="0" data-to="75" data-speed="5000" data-refresh-interval="50"></b>%</span>
                                    </div>
                                    <div class="skills-bar" data-percent="75%"></div>
                                    <div class="skills-bar-bg"></div>

                                    <div class="skills-info">
                                        <span class="title">REST</span>
                                        <span class="value"><b class="counter-numbers" data-from="0" data-to="90" data-speed="5000" data-refresh-interval="50"></b>%</span>
                                    </div>
                                    <div class="skills-bar" data-percent="90%"></div>
                                    <div class="skills-bar-bg"></div>

                                    <div class="skills-info">
                                        <span class="title">JSON / XML</span>
                                        <span class="value"><b class="counter-numbers" data-from="0" data-to="85" data-speed="5000" data-refresh-interval="50"></b>%</span>
                                    </div>
                                    <div class="skills-bar" data-percent="85%"></div>
                                    <div class="skills-bar-bg"></div>

                                    <div class="skills-info">
                                        <span class="title">jQuery</span>
                                        <span class="value"><b class="counter-numbers" data-from="0" data-to="75" data-speed="5000" data-refresh-interval="50"></b>%</span>
                                    </div>
                                    <div class="skills-bar" data-percent="75%"></div>
                                    <div class="skills-bar-bg"></div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--EXPERIENCE SECTION-->
    <section id="experience" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h5><span></span>Experience</h5>
                    </div>
                            <div class="achievements-section">
                                <div id="achievements-holder" class="row">

                                    <div class="achievements-block col-md-4">
                                        <div class="text-content">
                                            <div class="header">
                                                <span class="date"> <span>April</span><span>2017</span></span>
                                                <h6 class="heading">Freelance <span> WordPress Developer </span></h6>
                                            </div>
                                            <p>
                                                I worked on building, maintenance and support of various web sites
                                                within WordPress. Also, I had an opportunity to learn WordPress
                                                development while I  was converting manually my resume website from
                                                HTML to fully functional WordPress site from scratch.
                                            </p></br>
                                        </div>
                                    </div>

                                    <div class="achievements-block col-md-4">
                                        <div class="text-content">
                                            <div class="header">
                                                <span class="date"> <span>Sept</span><span>2017</span></span>
                                                <h6 class="heading">Binteger <span> PHP Developer </span></h6>
                                            </div>
                                            <p>
                                                Internship. First contact with Laravel.Complete work on
                                                RESTful APIs. Creating and testing a CURD application in
                                                admin panel and interaction with front using blade templating.
                                                Writing queries for MySQL. Layout integration within the
                                                project and basic use of front-end development.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="achievements-block col-md-4">
                                        <div class="text-content">
                                            <div class="header">
                                                <span class="date"><span>May</span><span>2018</span></span>
                                                <h6 class="heading"> Paneleven Group <span> PHP Developer</span></h6>
                                            </div>
                                            <p>
                                                My two years of experience have allowed me to cover all areas of work
                                                within the Symfony framework from the configuration and setup of the
                                                project, through working with libraries, writing APIs, complex queries,
                                                documenting code, etc.
                                            </p></br>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--EDUCATION SECTION-->
    <section id="education" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h5><span></span>Education</h5>
                    </div>
                    <div class="education-section">
                        <div id="education-holder" class="row">

                            <div class="timeline-block col-md-6">
                                <div class="text-content">
                                    <h6>University of Belgrade Faculty of Law</h6>
                                    <span>Department of Legal Theory | 2009-2016</span>
                                    <p></p>
                                </div>
                            </div>

                            <div class="timeline-block col-md-6">
                                <div class="text-content">
                                    <h6>Palanacka Gimnazija, Smed. Palanka</h6>
                                    <span>Sociolinguistics | 2005-2009</span>
                                    <p></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--INTEREST SECTION-->
    <section id="interest" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h5><span></span>Interest</h5>
                    </div>
                    <div class="interest-section">
                        <div class="row">
                            <div class="interest-block col-md-12">
                                <div class="text-content">
                                    <p>
                                     “If you want to discover the true character of a person, you have only to observe what they are passionate about.”
                                                                                                                                                </p>
                                </div>

                                <!--INTEREST TILES-->
                                <div class="interest col-sm-2 col-xs-6">
                                    <i class="ion-ios-game-controller-b-outline zoom"></i>
                                     <span>Gaming</span>
                                 </div>

                                <!--INTEREST TILES-->
                                <div class="interest col-sm-2 col-xs-6">
                                    <i class="ion-ios-paperplane-outline zoom"></i>
                                    <span>Traveling</span>
                                </div>

                                <!--INTEREST TILES-->
                                <div class="interest col-sm-2 col-xs-6">
                                    <i class="ion-ios-speedometer-outline zoom"></i>
                                     <span>Motorcycling</span>
                                 </div>

                                <!--INTEREST TILES-->
                                <div class="interest col-sm-2 col-xs-6">
                                    <i class="ion-ios-camera-outline zoom"></i>
                                    <span>Photography</span>
                                </div>

                                <!--INTEREST TILES-->
                                <div class="interest col-sm-2 col-xs-6">
                                   <i class="ion-ios-videocam-outline zoom"></i>
                                    <span>Movies</span>
                                </div>

                                <!--INTEREST TILES-->
                                <div class="interest col-sm-2 col-xs-6">
                                    <i class="ion-ios-play-outline zoom"></i>
                                     <span>Music</span>
                                 </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--CONTACT SECTION-->
    <section id="contact" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h5><span></span>Contact</h5>
                    </div>
                    <div class="contact-section">
                        <div class="row">

                            <!--DETAILS-->
                            <div class="finding-details col-md-6">
                                <div class="text-content">
                                    <h6>Get In Touch</h6>
                                    <p>
                                     Feel free to contact me via text, email or contact form. I will reply within 24 hours. :)</br>
                                    </p>
                                    <!--STREET INFO-->
                                    <div class="icons-with-details">
                                        <p><i class="ion-ios-location-outline"></i> Stanislava Sremčevića 14, 11000 Belgrade</p>
                                        <p id="zoom-fade"><i class="ion-ios-at-outline"></i><a href="mailto:filip.develop@outlook.com">filip.develop@outlook.com</a></p>
                                        <p id="zoom-fade"><i class="ion-ios-telephone-outline"></i> <a href="tel:+381631973141">+381 63 1973 141</a></p>
                                    </div>
                                    <!--MAP DIV-->
                                    <div id="map" class="map"></div>
                                </div>
                            </div>

                            <!--CONTACT FORM-->
                            <div class="contact-form col-md-6">
                                <form id="mail-form" class="form-horizontal">

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" placeholder="Subject" name="subject" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="email" class="form-control" placeholder="Your Email" name="email" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <textarea class="form-control" rows="5" placeholder="Your Message" name="message" required></textarea>
                                        </div>
                                    </div>

                                    <!--RE-CAPTCHA-->
                                    <div class="g-recaptcha" data-sitekey="_________________"></div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button id="send-button" type="submit" name="submit" value="Submit" class="btn">Send</button>
                                            <p class="message animated fadeInLeft"></p>
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer() ;?>
