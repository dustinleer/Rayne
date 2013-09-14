<?php get_header(); ?>

            <div id="content-container">
                <div id="content">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="article">
                            <div class="entry">
                                <?php the_content(); ?>
                            </div>
                        </div><!-- #article -->
                    <?php endwhile; ?>
                </div> <!-- #content -->
            </div><!-- #content-container -->

<?php get_footer(); ?>