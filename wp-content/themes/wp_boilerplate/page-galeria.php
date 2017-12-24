<?php get_header()?>



<main class="content">
	<article>
		<div class="flexslider">
		  <ul class="slides">
		  	<?php 

		  		$arg =array(
		  			'post_type' => 'galery',
		  			'post_per_page' => 10
		  		); 
		  		$get_arg = new WP_query($arg);
		  			while ($get_arg->have_posts() ){
		  			$get_arg->the_post();
		  		?>
			    <li>	
			       <?php the_post_thumbnail('Size') ?>
			    </li>
		  	<?php } wp_reset_postdata();
		  	?>
		  </ul>
		</div>	
	</article>
</main>
<div class="reserva">
<h2>Para reservas haga click aca.</h2>
<button class="boton">Reservar ahora.</button>
</div>





<?php get_footer()?>