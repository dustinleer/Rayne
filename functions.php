<?php

get_template_part( 'inc/cpt' );

// Enqueue scripts
function theme_scripts() {
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Qwigley|Fenix|Metrophobic|Montserrat:400,700|Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,300,800' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );


// Register primary navigation
if ( ! function_exists( 'theme_setup' ) ) {
	function theme_setup() {
		register_nav_menus( array(
			'navigation' => 'Primary Menu',
			'social' => 'Social Icons Menu',
		) );
	}
}
add_action( 'after_setup_theme', 'theme_setup' );

add_theme_support( 'post-thumbnails', array( 'portfolio' ) );
add_image_size( 'artwork', 193, 193, true);

// Custom comments loop
function tt_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
		extract($args, EXTR_SKIP);

		if ( 'div' == $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'div-comment';
		}
?>
		<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
		<?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<?php endif; ?>
		<div class="comment-table">
			<div class="comment-author vcard">
			<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
			<?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
			</div>
			<div class="spacer"></div>
			<div class="comment-box">
				<div class="comment-triangle"></div>
				<?php if ($comment->comment_approved == '0') : ?>
						<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
						<br />
				<?php endif; ?>
				<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
					<?php
						/* translators: 1: date, 2: time */
						printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
					?>
				</div>

				<?php comment_text() ?>
			</div><!-- .comment-box -->
		</div><!-- .clear -->

		<div class="reply">
		<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</div>
		<?php if ( 'div' != $args['style'] ) : ?>
		</div>
		<?php endif; ?>
<?php
        }