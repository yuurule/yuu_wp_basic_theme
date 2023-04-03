<?php get_header(); ?>
    
    <div class="container mt-5">

        <div class="row">

            <main class="col-12">

                <div class="row">

                    <header class="col-12">
                        <h1><?php the_title(); ?></h1>
                        <hr>
                    </header>

                    <div class="col-12 mt-5">

                        <?php the_content(); ?>

                    </div>

                </div>

            </main>

        </div>

    </div>

<?php get_footer(); ?>