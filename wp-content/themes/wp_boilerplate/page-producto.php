<?php get_header()?>


<div class="row">
    <div class="col-md-8 back">
                <table>
            <?php 
                $arg =array(
                    'post_type' => 'product',
                    'post_per_page' => 50
                ); 
                $get_arg = new WP_query($arg);
                    while ($get_arg->have_posts() ){
                    $get_arg->the_post();
                ?>
                    <tr>
                        <td>
                           <?php the_title() ?>
                           <?php the_content()?>
                        </td>
                        <td>$<?php the_field('precios')?></td>
                    </tr>
            <?php } wp_reset_postdata();
            ?>
                </table>
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





<?php get_footer()?>