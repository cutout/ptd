<?php
    include( '_partials/head.php' );
?>
    <body class="page-theme">

        <?php include( '_partials/header.php' ); ?>

        <div class="wrapper block big">
            <header>
                <a href="<?php echo $theme['url']; ?>">
                    <img src="<?php echo image_path( 'devices/' . $theme['image'] ); ?>" alt="<?php echo $theme['name']; ?> Screenshot">
                </a>
            </header>
            <section>
                <div class="content">
<?php
    if ( ! empty( $theme[ 'url-wporg' ] ) ) {
?>
                    <span class="blip price"><?php echo $theme['price-wporg']; ?></span>
<?php
    }
?>
                    <h1><?php echo $theme['name']; ?></h1>
                    <p><?php echo $theme['description']; ?></p>

                    <footer>
<?php
    if ( ! empty( $theme[ 'url-wporg' ] ) ) {
?>
                        <a href="#" class="button positive get-theme greedy event" data-event="getTheme"><i class="fa fa-download" aria-hidden="true"></i>Get <?php echo $theme['name']; ?> Now!</a>
<?php
    }

    if ( ! empty( $theme[ 'url-preview' ] ) ) {
?>
                        <a href="<?php echo $theme[ 'url-preview' ]; ?>" class="button ghost greedy"><i class="fa fa-eye" aria-hidden="true"></i>Preview <?php echo $theme['name']; ?></a>
<?php
    }
?>
                    </footer>
                </div>
            </section>
        </div>

<?php
    if ( site_include_exists( '_themes/' . $theme_name . '.php' ) ) {

        site_include_view( '_themes/' . $theme_name . '.php' );
        site_include_view( '_partials/theme-purchase-buttons.php', array( 'theme' => $theme ) );

    }
?>

        <!-- Showcase Websites -->
<?php
    $websites = website_get_by_tag( $theme_name, 3 );

    if ( $websites ) {
?>
        <div class="wrapper block-wrapper showcase-wrapper">
            <header class="block-header">
                <h2>
                    Examples of <?php echo $theme[ 'name' ]; ?> in Use
                    <small><a href="<?php echo $theme[ 'url-showcase' ]; ?>">View More <i class="fa fa-arrow-right" aria-hidden="true"></i></a></small>
                </h2>
            </header>

<?php
        foreach ( $websites as $site ) {
?>
            <div class="block showcase-website theme-<?php echo $site['theme']; ?>">
                <a href="<?php echo $site['url-preview']; ?>" class="image">
                    <img src="<?php echo $site[ 'image-url' ]; ?>" width="400" height="300" alt="<?php echo $site['name']; ?> Screenshot">
                </a>
                <div class="meta">
                    <h3><?php echo $site['name']; ?></h3>
                </div>
            </div>
<?php
        }
?>
        </div>
<?php
    }
?>

        <!-- Theme Features -->
        <div class="wrapper block-wrapper">
            <header class="block-header">
                <h2>
                    <?php echo $theme[ 'name' ]; ?> Features
                    <small><a href="<?php echo $theme[ 'url-documentation' ]; ?>">View Docs for complete list <i class="fa fa-arrow-right" aria-hidden="true"></i></a></small>
                </h2>
            </header>
<?php
    foreach( $theme[ 'supports' ] as $supports ) {

        $feature = documentation_get( $supports );

        if ( $feature && isset( $feature[ 'icon' ] ) ) {
?>
            <div class="block">
                <div class="content">
                    <i class="fa fa-<?php echo $feature[ 'icon' ]; ?> icon"></i>
                    <h3><a href="<?php echo $feature[ 'url' ]; ?>"><?php echo $feature[ 'name' ]; ?></a></h3>
                    <p><?php echo $feature[ 'description' ]; ?></p>
                </div>
            </div>
<?php
        }
    }
?>
        </div>
<?php
    site_include_view( '_partials/theme-purchase-buttons.php', array( 'theme' => $theme ) );

    if ( themes_supports( $theme, 'theme-club' ) ) {

        site_include_view( '_partials/theme-club.php' );

    }

    include( '_partials/buy-now.php' );

    include( '_partials/footer.php' );

