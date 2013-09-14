<div class="postmetadata clear">
    <div class="postmeta-left">
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
    </div>
    <span class="comments-count">
        <?php comments_popup_link('No Comments ', '1 Comments ', '% Comments '); ?>
        <span aria-hidden="true" class="travistaylor-iconsbubbles comment-icon"></span>
    </span>
</div><!-- .postmetadata -->