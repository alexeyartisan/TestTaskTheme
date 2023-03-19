<?php 

get_header(); 


?>

      <?php
      if ( have_posts() ) :
      
        while ( have_posts() ) : the_post();
          
          get_template_part( 'template-parts/content' );

        endwhile; 

        the_posts_navigation();

      else:

        get_template_part( 'template-parts/content', 'none' );

      endif;  
      ?>
    
    </main>

  </div>

<?php

get_footer();