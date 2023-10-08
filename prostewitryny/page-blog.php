<?php
/**
 * Template Name: Blog
 */
 
 get_header(); ?>

<section id="realizacje-baner">
  <div class="container-fluid">
    <div class="row">
      <div class="col page-header-col">
        <h2 class="page-header"><strong>Blog</strong></h2>
        <hr>
      </div>
    </div>
  </div>
</section>


<?php

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'blog',
    'posts_per_page' => 20,
);
$arr_posts = new WP_Query( $args );
 
if ($arr_posts->have_posts() ): 
    ?>

    <section id="blog">
        <div class="container-fluid">
            <div class="row blog-row">

    <?php 
    while ($arr_posts->have_posts() ):
        $arr_posts->the_post();
        
        ?>
            <div class="col-12 col-md-6 blog-col">

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="row">
            <?php
            if (has_post_thumbnail() ): ?>
            <div class="col-12 col-md-6 realizacja-image-col">
			    <a href="<?php the_permalink(); ?>">
                   <?php the_post_thumbnail( 'realizacja-lista' ); ?>
			    </a>
            </div>
            <div class="col-12 col-md-6 realizacja-text-col">
                <header class="entry-header">
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="entry-title"><?php the_title(); ?></h2>
                    </a>
                </header>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="strona-button">Czytaj dalej...</a>
                </div>
            </div>
	        <?php
            // endif;
            else:
            ?>
            <div class="col">
                <header class="entry-header">
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="entry-title"><?php the_title(); ?></h2>
                    </a>
                </header>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="strona-button">Czytaj dalej...</a>
                </div>
            </div>
            <?php
            endif;
            ?>
            </div>
            </article>
            </div>
        </div>
        <?php
    endwhile;
    ?>
    
        </div>
    </section>
    
    <?php
endif;

?>



<?php get_footer(); ?>