<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
 	  
	<?php while (have_posts()) : the_post(); ?>

		<?php list($mo, $da) = explode(" ", get_the_time('M d')) ?>
		<div class="entry">
			<div class="date">
				<p>
					<span class="month"><?php echo $mo ?></span>
					<span class="day"><?php echo $da ?></span>
				</p>
			</div>
			<div class="info">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a></h2>
				<?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> <?php edit_post_link('Edit', ' | ', ''); ?>
			</div>
			<div class="clear"></div>
		</div>
		<div class="post">
			<?php the_content('View all content of this post &raquo;'); ?>
		</div>
		<div class="bubble"><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></div>
		
		<div class="distance">&nbsp;</div>
	
	<?php endwhile; ?>
	
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
	
	<?php
	else :
		echo "Sorry, no posts matched your criteria";
	endif;
	?>
<?php get_footer() ?>