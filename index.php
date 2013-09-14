<?php get_header(); ?>

            <div id="content-container">
                <div id="content">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="article">
                                <h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                                <div class="entry">
                                    <?php the_content(); ?>
                                </div>

                                <?php get_template_part( 'parts/postmetadata', 'index' ); ?>

                            </div><!-- #article -->
                        <?php endwhile; ?>
                    <?php else : ?>
                    <h2>Not found</h2>
                <?php endif; ?>
                </div> <!-- #content -->
            </div><!-- #content-container -->

<?php get_footer(); ?>