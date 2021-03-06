
<nav class="main-menu">

    <button>Menu</button>

    <ul>
        <li>
            <a href="#search" class="search-toggle">
                <i class="fa fa-search" aria-hidden="true"></i>
                <span class="screen-reader-text">Search Pro Theme Design</span>
            </a>
        </li>

        <li class="themes">
            <a href="<?php echo path( 'themes/' ); ?>">Themes</a>
        </li>

        <li class="wordpress-plugins">
            <a href="<?php echo path( 'wordpress-plugins/' ); ?>">Plugins</a>
        </li>

        <li class="articles">
            <a href="<?php echo path( 'articles/' ); ?>">How To</a>
        </li>

<?php
        if ( 'dev' == ENV ) {
?>
<?php
        }
?>

        <li class="tools">
            <a href="<?php echo path( 'tools/' ); ?>">Tools</a>
        </li>

        <li class="support">
            <a href="<?php echo path( 'documentation/' ); ?>">Support</a>
        </li>

        <li>
            <a class="twitter" href="https://www.twitter.com/prothemedesign">
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <span class="screen-reader-text">Follow us on Twitter</span>
            </a>
        </li>

        <li>
            <a class="facebook" href="https://www.facebook.com/prothemedesign">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <span class="screen-reader-text">Follow us on Facebook</span>
            </a>
        </li>
    </ul>

</nav>
