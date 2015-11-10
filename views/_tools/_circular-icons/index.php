<?php
    $download_url = path( 'assets/downloads/circular-icons.zip' );
    if ( ! DISABLE_THEME_CLUB ) {
        $download_url = 'https://gum.co/EItq';
    }
?>
<div class="wrapper text">
    <?php site_breadcrumbs(); ?>

    <h1>Circular Icons</h1>
    <p class="intro">A free bitmap icon set I first published in 2008. A set of 117 pixel icons in 16x16 size, designed for a variety of uses from websites to apps.</p>
    <p><img src="<?php echo image_path( 'website/circular-icons.png' ); ?>" alt="Circular Icons Demo" /></p>
    <p><a href="<?php echo $download_url; ?>" class="button greedy positive"><i class="fa fa-download"></i>Download Circular Icon Set</a></p>
    <p class="note">Released under the GPL.</p>
</div>

<?php
    site_include_view( '_partials/more-themes.php' );
