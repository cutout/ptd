        <footer id="footer">
<?php
    if ( page_is_home() ) {
?>
            <div class="wrapper map">

                <section class="origin">
                    <h5>About Us</h5>
                    <h4 id="about-lead">Pro Theme Design began in 2007 as a collaboration between two web designers</h4>
                </section>

                <div class="blurb blurb-ben">

                    <img id="ava-ben" class="avatar" src="<?php echo image_path( 'website/ava-ben.jpg' ); ?>" alt="Ben Gillbanks">
                    <h5>Ben Gillbanks</h5>
                    <p class="location">Exeter, England</p>
                    <p class="bio">Ben is a full stack developer - doing both design and development - often turning Darrens crazy ideas into real products, but not averse to designing his own themes and writing the occassional plugin. Plus he blogs about WordPress and technology at <a href="https://www.binarymoon.co.uk/">Binary Moon</a>.</p>

                    <a href="https://www.binarymoon.co.uk" target="_blank" class="link">
                        <i class="fa fa-link" aria-hidden="true"></i> Personal Site
                    </a>
                    <a href="https://twitter.com/binarymoon" target="_blank" class="link">
                        <i class="fa fa-twitter" aria-hidden="true"></i> Follow Me on Twitter
                    </a>

                </div>

                <div class="blurb blurb-darren">

                    <img id="ava-darren" class="pos avatar" src="<?php echo image_path( 'website/ava-darren.jpg' ); ?>" alt="Darren Hoyt">
                    <h5>Darren Hoyt</h5>
                    <p class="location">Brooklyn, NY</p>
                    <p class="bio">Established in the WordPress community for projects like <strong>Mimbo</strong> and <strong>Agregado</strong>, Darren also has 14 years experience designing websites for businesses and startups. His role at Pro Theme is taking what Ben builds and making it beautiful and simple to use.</p>

                    <a href="http://www.darrenhoyt.com" target="_blank" class="link" >
                        <i class="fa fa-link" aria-hidden="true"></i> Personal Site
                    </a>
                    <a href="http://www.twitter.com/darrenhoyt" target="_blank" class="link" >
                        <i class="fa fa-twitter" aria-hidden="true"></i> Follow Me on Twitter
                    </a>

                </div>

            </div>
<?php
    }
?>
            <div class="wrapper footnote">

                <?php include( 'newsletter.php' ); ?>

                <p>
                    <i class="fa fa-question-circle" aria-hidden="true"></i> <a href="<?php echo path( 'why-us/' ); ?>">Why Pro theme Design?</a> <span class="sep">|</span>
                    <i class="fa fa-sitemap" aria-hidden="true"></i> <a href="<?php echo path( 'sitemap/' ); ?>">Sitemap</a> <span class="sep">|</span>
                    <!-- <i class="fa fa-wordpress" aria-hidden="true"></i> <a href="https://theme.wordpress.com/themes/by/pro-theme-design/"> WordPress.com</a> <span class="sep">|</span> -->
                    <i class="fa fa-envelope" aria-hidden="true"></i> <a href="<?php echo path( 'contact/' ); ?>">Contact</a> <span class="sep">|</span>
                    <i class="fa fa-check" aria-hidden="true"></i> <a href="<?php echo path( 'policies/' ); ?>">Policies</a>
                </p>

                <p>&copy; 2007 - <?php echo date( 'Y' ); ?> Pro Theme Design, All Rights Reserved</p>

                <p>
                    <a href="#masthead" class="scroll-to scroll-to-top">
                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                        <span class="screen-reader-text">Scroll to Top</span>
                    </a>
                </p>
            </div>

        </footer>

        <div class="modal-wrapper newsletter-modal">
            <div class="modal">
                <a href="#" class="close-button" rel="nofollow">
                    <i class="fa fa-times" aria-hidden="true"></i>
                    <span class="screen-reader-text">Close Newsletter Popup</span>
                </a>
                <?php include( 'newsletter.php' ); ?>
            </div>
        </div>

        <?php include( 'popover.php' ); ?>

        <div class="modal-wrapper search-modal">
            <div class="modal">
                <a href="#" class="close-button" rel="nofollow">
                    <i class="fa fa-times" aria-hidden="true"></i>
                    <span class="screen-reader-text">Close Search Form</span>
                </a>
                <h2>Search Pro Theme Design...</h2>
                <?php include( 'google-search.php' ); ?>
            </div>
        </div>

        <div class="overlay"></div>

        <?php site_script(); ?>

    </body>
</html>
