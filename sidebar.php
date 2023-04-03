<aside class="col-md-4 col-lg-3 sidebar pt-3">

    <?php 
    if ( is_active_sidebar( 'sidebar-1' ) ) :
        dynamic_sidebar( 'sidebar-1' );
    endif; 
    ?>

</aside>