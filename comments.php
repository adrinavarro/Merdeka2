<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
	$oddcomment = "graybox";
?>
<div id="comment-item">
	<div id="hasil-comment">
		<fieldset>
		<?php if ( have_comments() ) : ?>
				<legend class="info"><strong><?php comments_number('No Comments', 'One Comment', '% Comments' );?> to &#8220;<?php the_title(); ?>&#8221;</strong></legend>
				<ol class="commentlist">
					<?php foreach ($comments as $comment) : ?>
						<li class="<?=$oddcomment;?>">
							<strong><a name="comment-<?php comment_ID() ?>"></a><?php comment_author_link() ?></strong>:<br />
							<?php comment_text() ?>
						</li>
						<?php if($oddcomment == "graybox") $oddcomment = ""; else $oddcomment = "graybox"; ?>
					<?php endforeach; /* end for each comment */ ?>

				</ol>
		<?php else: // this is displayed if there are no comments so far ?>
			<legend class="info"><strong>
				<?php if ($post->comment_status == "open") : ?> 
					There are no comments. Post one!
				<?php else : // comments are closed ?>
					Comments are closed.
				<?php endif; ?>
			</strong></legend>
		<?php endif; ?>
		</fieldset>

<?php if ($post->comment_status == 'open') : ?>
	</div>
	<div id="comment">
	<form action="<?php echo get_settings('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<fieldset>
				<legend class="info"><strong>Post a comment</strong></legend>
				<?php if ( $user_ID ) : ?>
					<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
				<?php else : ?>
					<label>Name</label> (required)<br /><input type="text" name="author" id="form-name" tabindex="1" value="<?php echo $comment_author; ?>" />
					<label>Email</label> (required)<br /><input type="text" name="email" id="form-mail" tabindex="2" value="<?php echo $comment_author_email; ?>" />
					<label>Website</label><br /><input type="text" name="url" id="form-link" tabindex="3" value="<?php echo $comment_author_url; ?>" />
				<?php endif; ?>
					<label>Comment</label><br />
					<textarea name="comment" id="coment-message" cols="25" rows="5" tabindex="4"></textarea>
					<input class="submit" value="Submit" type="submit" tabindex="5" />
					<?php comment_id_fields(); ?>
			</fieldset>
			<?php do_action('comment_form', $post->ID); ?>
		</form>
	</div>
</div>
<?php
endif;
