<?php get_header(); ?>
    
    <div class="container mt-5">

        <div class="row">

            <?php
            while ( have_posts() ) :
                the_post();
            ?>
            <main class="col-md-8 col-lg-9 single-post">

                <div class="row">

                    <header class="col-12">
                        <h1><?php the_title(); ?></h1>
                        <hr>
                    </header>

                    <div class="col-12">
                        <?php 
                        if( has_post_thumbnail() ) : 
                            the_post_thumbnail( '', array( 'class' => 'card-img-top post-thumbnail', 'alt' => get_the_title() ) );
                        else :
                        ?>
                        <img src="https://placehold.co/1200x400" class="card-img-top post-thumbnail" alt="<?php the_title() ?>">
                        <?php endif; ?>
                        
                        <!-- post meta -->
                        <ul class="list-inline mt-3">
                            <li class="list-inline-item me-4"><i class="far fa-calendar"></i> <?php the_time('d M, Y'); ?></li>
                            <li class="list-inline-item me-4">Category : <?php the_category(', '); ?></li>
                            <li class="list-inline-item me-4">By <?php the_author(); ?></li>
                        </ul>

                        <div class="post-content mt-5">

                            <?php the_content(); ?>

                        </div>

                        <!-- prev & next post -->
                        <?php
                        the_post_navigation(
                            array(
                                'next_text' => '<p class="post-title">Next post : %title</p>',
                                'prev_text' => '<p class="post-title">Previous post : %title</p>',
                            )
                        );
                        ?>
                    </div>

                    <!-- comments -->
                    <?php if ( comments_open() || get_comments_number() ) : ?>

                    <div class="col-12 mt-5">
                        
                        <h4>Comments</h4>
                        <hr>
                        <?php comments_template(); ?>

                    </div>
                    <?php endif; ?>

                </div>

            </main>

            <?php
            endwhile;
            ?>

            <!-- Sidebar -->
            <?php get_sidebar(); ?>

        </div>

    </div>

<?php get_footer(); ?>