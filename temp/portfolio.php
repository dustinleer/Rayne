<?php 

//Template Name: Portfolio

get_header(); ?>

            <div id="content-container">
                <div id="content">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="entry">
                            <?php the_content(); ?>
                        </div><!-- .artwork -->
                    <?php endwhile;

                    //loop portfolio post type
                    $wp_query = new WP_Query(array('post_type' => 'portfolio', 'posts_per_page' => 99));        
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post(); ?>
                            <div class="artwork">
                                <?php the_post_thumbnail( 'artwork' ); ?>
                            </div><!-- .artwork -->
                        <?php endwhile;
                    else : ?>
                    <h2>Not found</h2>
                <?php endif; ?>
                </div> <!-- #content -->
            </div><!-- #content-container -->

<?php get_footer(); ?>