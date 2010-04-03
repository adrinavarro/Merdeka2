<div id="navigation">
	<div id="navigation-container">
	
		<div id="archive-history">
			<h3>Links</h3>
			<ul>
				<?php get_links(2, '<li>', '</li>', '', TRUE, 'url', FALSE); ?>
			</ul>
			
			<h3>About</h3>
				...palabras más, palabras menos es lo que menos te puedo dar, es lo de siempre palabras nuevas, palabras llenas de remordimiento palabras que se lleva el viento palabras menos, palabras más. He venido a jugar, juguemos. 
		</div>

		<div id="recent-post">
			<h3>Categories</h3>
				<ul>
					<?php wp_list_cats('sort_column=name&hide_empty=1&limit=7'); ?> 
				</ul>
			
			<h3>Archive</h3>
				<ul>
					<?php wp_get_archives('type=monthly&limit=7'); ?>
				</ul>

		</div>


		<div id="page-about">
		
			<h3>Feeds</h3>
				<ul class="feedlist">
					<li><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
					<li><a href="<?php bloginfo('atom_url'); ?>">Atom</a></li>
				</ul>
				
				
			<h3>Pages</h3>
			<ul>
				<?php wp_list_pages('title_li=&limit=7'); ?>
			</ul>
			
			
			<h3>Search</h3>
				<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
					<div>
						<input type="text" id="searchform2" value="<?php echo wp_specialchars($s, 1); ?>" name="s" />
						<input type="submit" id="searchsubmit2" value="Search" />
					</div>
				</form>

		</div>
		
	</div>
</div>