<article class="card w-100 post">
    <?php 
    if( has_post_thumbnail() ) : 
        the_post_thumbnail( '', array( 'class' => 'card-img-top post-thumbnail', 'alt' => get_the_title() ) );
    else :
    ?>
    <img src="https://placehold.co/600x400" class="card-img-top post-thumbnail" alt="<?php the_title() ?>">
    <?php endif; ?>
    
    <div class="card-body">
        <h5 class="card-title post-title"><?php the_title(); ?></h5>
        <div class="post-meta mb-3">
            <span class="meta-date"><i class="far fa-calendar"></i> <?php the_time('d M, Y'); ?></span>
        </div>
        <p class="card-text post-excerpt">
            <?php the_excerpt(); ?>
        </p>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more <i class="fas fa-chevron-right ms-3"></i></a>
    </div>
</article>