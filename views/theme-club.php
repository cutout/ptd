<?php
    include( '_partials/header.php' );

    // this number isn't strictly accurate - but it's pretty close
    $customers = date( 'U' ) / 123456;
    $customers = number_format( $customers );
?>

    <body class="page-theme-club">

        <?php include( '_partials/nav.php' ); ?>


        <header>
            <div class="row">
                <img class="logomark" src="<?php echo $base_url; ?>/img/logo-ptd.png" alt="Pro Theme Design Compass Logo" />
                <h1>Pro Theme Design</h1>
                <h2>Join over <strong><?php echo $customers; ?>+</strong> happy themers.</h2>
            </div>

        </header>

        <div class="promo">
            <div class="content-main content-text">
                <div class="row">

                    <p class="intro">Join the Pro Theme Design Theme Club to get access to all of our self hosted themes. The Pro Theme Design Theme Club is the best value for users who run multiple sites or agencies who want to use multiple themes for different clients. You can use the themes for your client work.</p>

                    <ul>
                        <li><strong>Peace of mind</strong>: We've been making and selling themes since 2007 - and have no plans to stop.</li>
                        <li><strong>Secure Themes</strong>: All of our themes have been code reviewed by the wordpress.com team - and they know they're stuff!</li>
                        <li><strong>Unlimited Sites</strong>: Use our themes on as many sites as you like.</li>
                        <li><strong>All theme updates</strong>: Get all theme updates for the duration of your membership.</li>
                        <li><strong>New themes</strong>: We aim to release 2 or 3 new themes every year.</li>
                    </ul>

                    <div class="join-button">
                        <a class="gumroad-button" href="https://gumroad.com/l/XgLK">Join the Theme Club</a>
                    </div>

                    <p class="note">Note: the Theme Club does not work for WordPress.com - you can <a href="http://theme.wordpress.com/themes/by/pro-theme-design/" target="_blank">Get our WordPress.com Themes</a> here.</p>
                </div>
            </div>
        </div>


<?php
    include( '_partials/footer.php' );
