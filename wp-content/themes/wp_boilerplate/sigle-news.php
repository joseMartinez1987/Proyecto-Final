<?php get_header ?>

<main class=" content">
	<article>
		<div class="container">
			<?php 
				if (have_posts()){ ?>
					<?php the_post(); ?>

					<h1><?php the_title() ?></h1>
		</div>
	</article>



</main>





<?php get_footer ?>

