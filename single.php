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
			<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</div>


	   <!--
    	   <?php trackback_rdf() ?>
	    -->

		<?php comments_template() ?>

	<?php endwhile; else: ?>
		<h2 class="center">Not Found</h2>
		<p class="center"><?php echo ("Sorry, but you are looking for something that isn't here."); ?></p>
<?php endif; ?>

<?php get_footer(); ?>