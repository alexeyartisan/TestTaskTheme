<article id="post-<?php the_ID(); ?>" <?php post_class( [ 'post-card' ] ); ?>>
  
  <?php if ( has_post_thumbnail() ): ?>
    <a class="card-media" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" aria-hidden="true" tabindex="-1">
      <?php the_post_thumbnail(); ?>
    </a>
  <?php endif; ?>

  <div class="card-body">
    
    <?php echo '<time>' . esc_html( get_the_date() ) . '</time>'; ?>

    <header class="entry-header">
      <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
    </header>

    <div class="entry-meta">
      <?php 
        if ( has_category() ) {
          the_category( ', ' );
        }
      ?>
    </div>

    <div class="entry-content">
      <?php
        if( has_excerpt() ) {
          the_excerpt();
        } elseif ( strpos( $post->post_content, '<!--more-->' ) ) {
          the_content( 'Read more' );
        } else {
          the_excerpt();
        }
      ?>
    </div>

    <?php the_author_posts_link(); ?>

  </div>

</article>
