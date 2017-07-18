<?php
if ( post_password_required() ) {
	return;
}

if ( comments_open() || get_comments_number()) : ?>
	<div class="edgtf-comment-holder clearfix" id="comments" data-edgtf-anchor="comments">
		<div class="edgtf-comment-number">
			<div class="edgtf-comment-number-inner">
				<h5><?php comments_number(esc_html__('No Comments', 'cozy'), '1'.esc_html__(' Comment ', 'cozy'), '% '.esc_html__(' Comments ', 'cozy')); ?></h5>
			</div>
		</div>
		<div class="edgtf-comments">
			<?php if(have_comments()) : ?>
				<ul class="edgtf-comment-list">
					<?php wp_list_comments(array('callback' => 'cozy_edge_comment')); ?>
				</ul>
			<?php endif; ?>
			<?php if( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' )) : ?>
				<p><?php esc_html_e('Sorry, the comment form is closed at this time.', 'cozy'); ?></p>
			<?php endif; ?>
		</div>
	</div>
	<?php
	$commenter = wp_get_current_commenter();
	$req       = get_option('require_name_email');
	$aria_req  = ($req ? " aria-required='true'" : '');

	$args = array(
		'id_form'              => 'commentform',
		'id_submit'            => 'submit_comment',
		'title_reply'          => esc_html__('Post a Comment', 'cozy'),
		'title_reply_to'       => esc_html__('Post a Reply to %s', 'cozy'),
		'cancel_reply_link'    => esc_html__('Cancel Reply', 'cozy'),
		'label_submit'         => esc_html__('Submit', 'cozy'),
		'comment_field'        => '<textarea id="comment" placeholder="'.esc_html__('Write your comment here...', 'cozy').'" name="comment" cols="45" rows="8" aria-required="true"></textarea>',
		'comment_notes_before' => '',
		'comment_notes_after'  => '',
		'title_reply_before'   => '<h5 id="reply-title" class="comment-reply-title">',
		'title_reply_after'    => '</h5>',
		'fields'               => apply_filters('comment_form_default_fields', array(
			'author' => '<div class="edgtf-comment-column"><label class="edgtf-comment-label" for="author">'.esc_html__('Name', 'cozy').'</label><input id="author" name="author" type="text" value="'.esc_attr($commenter['comment_author']).'"'.$aria_req.' /></div>',
			'url'    => '<div class="edgtf-comment-column"><label class="edgtf-comment-label" for="email">'.esc_html__('E-mail Address', 'cozy').'</label><input id="email" name="email" type="text" value="'.esc_attr($commenter['comment_author_email']).'"'.$aria_req.' /></div>',
			'email'  => '<div class="edgtf-comment-column"><label class="edgtf-comment-label" for="url">'.esc_html__('Website', 'cozy').'</label><input id="url" name="url" type="text" value="'.esc_attr($commenter['comment_author_url']).'" /></div>'
		))
	);
	?>
	<?php if(get_comment_pages_count() > 1) {
		?>
		<div class="edgtf-comment-pager">
			<p><?php paginate_comments_links(); ?></p>
		</div>
	<?php } ?>
	<div class="edgtf-comment-form">
		<?php comment_form($args); ?>
	</div>
<?php endif; ?>