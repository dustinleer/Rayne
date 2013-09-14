<?php get_header(); ?>

            <div id="content-container">
                <div id="content">
                    <?php if ( have_posts() ):?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="article">
                                <h2 class="post-title"><?php the_title(); ?></h2>
                                <div class="entry">
                                    <?php the_content(); ?>
                                </div>
                                <div class="postmetadata">
                                    <span class="date">
                                        <span aria-hidden="true" class="travistaylor-iconsclock"></span>
                                        <?php the_time('M jS, Y') ?>
                                    </span>
                                    <span class="category">
                                        <span aria-hidden="true" class="travistaylor-iconsfolder-open"></span>
                                        <?php the_category(', ') ?>
                                    </span>
                                    <span class="tags">
                                        <?php the_tags('<span aria-hidden="true" class="travistaylor-iconstag"></span> ', ', ', ' '); ?>
                                    </span>
                                    <span class="comments-count">
                                        <?php comments_popup_link('No Comments ', '1 Comments ', '% Comments '); ?>
                                        <span aria-hidden="true" class="travistaylor-iconsbubbles comment-icon"></span>
                                    </span>
                                </div><!-- .postmetadata -->
                            </div><!-- #article -->
                            <?php comments_template(); ?>
                        <?php endwhile; ?>
                    <?php else : ?>
                    <h2>Not found</h2>
                <?php endif; ?>
                </div> <!-- #content -->
            </div><!-- #content-container -->

<?php get_footer(); ?>