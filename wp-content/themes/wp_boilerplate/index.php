<?php get_header() ?>

<div class="row">
    <div class="col-md-8 back">
        <p class="principal">Después de buenísimos siete años con Minga, sus parroquianos, ambiente y su buena onda, fue que decidimos profundizar nuestros conocimientos en torno a la estrella de la casa,  la noble pizza.</p>
        <p class="principal">Esto nos llevó a buscar más allá de nuestras fronteras, viajamos hasta la cuna de la pizza, Nápoles. Bastó sólo unos días para asegurarnos que la pizza ofrecida en ese lugar era realmente especial. Su ligereza, la pasión y el orgullo de los napolitanos por su producto y la calidad de éste, simplemente, nos conquistaron. Fue ahí donde aprendimos a elaborar la verdadera pizza napolitana, en la Associazione Verace Pizza Napolitana AVPN, donde comenzó a surgir la idea de crear “Domani”.</p>
        <p class="principal">En aquel curso intensivo pudimos aprender las técnicas utilizadas por antiguos puristas napolitanos, conocimos productores de harina, tomate y mozzarella y pusimos en práctica nuestro aprendizaje en dos antiguos establecimientos: Matozzi  fundada en 1833 y AL22 que opera desde 1935. AL22 es el actual campeón en el mundial de pizzerias realizado en chile el año 2016.</p>
        <p class="principal">La experiencia fue increíble. Compartimos y logramos conocer a personas que se toman la pizza en serio y mantienen una tradición de incalculable valor inmaterial. Nos recibieron muy bien y se aseguraron de que nos lleváramos a Chile la receta de la verdadera Napolitana.</p>
        <p class="principal">Con “Domani”, nuestra intención es trabajar para que nuestros comensales vivan la experiencia de la pizza de Nápoles, la misma que nosotros experimentamos durante nuestro paso por la ciudad, cuna de esta icónica preparación. Los esperaremos con una sencilla carta mediterránea y una pizza preparada con la receta original napolitana.</p>

        
    </div>

    <div class="col-md-4 sidebar">
        <iframe width="350" height="300" src="https://www.youtube.com/embed/Y9rDY1gpjM4" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>

        <iframe width="350" height="300" src="https://www.youtube.com/embed/kbrE7gATjMQ" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
        <br><br>
        <div class="jumbotron">
            <h2 class="noticias">Noticias</h2>
           <ul class="news">
                <?php 

                $arg =array(
                    'post_type' => 'news',
                    'post_per_page' => 4
                ); 
                $get_arg = new WP_query($arg);
                    while ($get_arg->have_posts() ){
                    $get_arg->the_post();
                ?>
                <li>    
                   <a href="<?php the_permalink() ?>"><?php the_title()?> </a>
                </li>
            <?php } wp_reset_postdata();
            ?>
            </ul>
        </div>
</div>
</div>


<?php get_footer() ?>

