<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Theme - Wordpress</title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo home_url(); ?>">Basic Theme - Wordpress</a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <?php if ( has_nav_menu( 'primary' ) ) :
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'menu_class'      => 'list-inline',
                            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                            'fallback_cb'     => false,
                        )
                    );
                endif; ?>
            </div>
        </nav>
    </div>