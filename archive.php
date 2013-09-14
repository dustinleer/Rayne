<?php get_header(); ?>

            <div id="content-container">
                <div id="content">
                    <?php if ( have_posts() ) : ?>
        
                    <?php if (is_category()) {?>
                        <h2 id="archiveTitle"><span aria-hidden="true" class="travistaylor-iconsfolder-open"></span> Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
                    <?php } elseif (is_tag()) {?>
                        <h2 id="archiveTitle"><span aria-hidden="true" class="travistaylor-iconstag"></span> Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
                    <?php } elseif (is_day()) {?>
                        <h2 id="archiveTitle">Archive for <?php the_time('F jS, Y'); ?></h2>
                    <?php } elseif (is_month()) {?>
                        <h2 id="archiveTitle">Archive for <?php the_time('F, Y'); ?></h2>
                    <?php } elseif (is_year()) {?>
                        <h2 id="archiveTitle">Archive for <?php the_time('Y'); ?></h2>
                    <?php } elseif (is_author()) {?>
                        <h2 id="archiveTitle">Author Archive</h2>
                    <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {?>
                        <h2 id="archiveTitle">Archives</h2>
                    <?php } ?>

                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="article">
                                <h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
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
                        <?php endwhile; ?>
                    <?php else : ?>
                    <h2>Not found</h2>
                <?php endif; ?>
                </div> <!-- #content -->
            </div><!-- #content-container -->

<?php get_footer(); ?>