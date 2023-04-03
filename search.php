<?php get_header(); ?>
    
    <div class="container mt-5">

        <div class="row">

            <!-- Posts -->
            <main class="col-md-8 col-lg-9">

                <div class="row">

                    <header class="col-12">
                        <h1>Search : <?php echo get_search_query(); ?></h1>
                        <hr>
                    </header>

                    <?php 
                    if( have_posts() ) : 
                        while( have_posts() ) :

                            the_post();
                    ?>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <?php get_template_part( 'template-parts/content', 'post' ); ?>
                    </div>

                    <?php 
                        endwhile;
                    endif; 
                    ?>

                </div>

            </main>

            <!-- Sidebar -->
            <?php get_sidebar(); ?>

        </div>

    </div>

<?php get_footer(); ?>