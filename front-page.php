<?php 

get_header(); 

?>

<section class="hero">
    <div class="hero__content">
            <div class="overflow-container">
                <div class="title-wrap">
                    <div class="title"> 
                        <h1>Workforce Survey</h1>
                    </div>
                </div>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum debitis tenetur fugit quam at perspiciatis reprehenderit labore impedit 
                    illo recusandae quas voluptate eius, maxime enim sunt est repellat obcaecati facilis.
                </p>
                <div class="btn-wrap">
                    <div class="btn">
                        <a href="#">Start Now</a>
                    </div>
                </div>
                
            </div>
        </div>
</section>

<?php 
    query_posts(array( 
        'post_type' => 'news',
        'showposts' => 4 
    ) );  
?>

<section class="news">
    <div class="container">
        <div class="row">

        <?php while (have_posts()) : the_post(); ?>
            <div class="post-card">
                <div class="inner">
                    <a href="<?php the_permalink(); ?>" class="post-card__image" style="background-image: url('<?php the_field('image') ?>');"></a>
                    <div class="content">
                        <a href="<?php the_permalink(); ?>" class="post-card__title"><?php the_title('<h3>', '</h3>'); ?></a>
                        <div class="post-card__excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="#" class="post-card__show-more" data-action="more">
                            <img class="arrow-more" src="<?php echo get_template_directory_uri() . '/assets/img/arrow.svg' ?>" >
                            <img class="arrow-less" src="<?php echo get_template_directory_uri() . '/assets/img/arrow.svg' ?>" >
                            <span class="more">Show more</span>
                            <span class="less">Show less</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endwhile;?>

        </div>
    </div>
</section>



<?php

get_footer();