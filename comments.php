<?php

wp_list_comments( array(
    'callback'          => 'tt_comment',
    'type'              => 'comment',
    'reply_text'        => '<span aria-hidden="true" class="travistaylor-iconsundo"></span> Reply',
    'avatar_size'       => 62
), $comments ); ?>

<?php comment_form( array(
    'comment_notes_after' => '',
    'title_reply' => '<h3 class="leave-comment">Leave a Comment</h3>'
) ); ?>