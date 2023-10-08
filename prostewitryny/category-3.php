<?php
/**
 * Template Name: Kategoria ID 3
 */
 
 get_header(); ?>


<?php

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'realizacje',
    'posts_per_page' => 5,
);
$arr_posts = new WP_Query( $args );
 
if ($arr_posts->have_posts() ):  
    while ($arr_posts->have_posts() ):
        $arr_posts->the_post();
        
        ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php
            if (has_post_thumbnail() ): ?>
			    <a href="<?php the_permalink(); ?>">
                   <?php the_post_thumbnail(); ?>
			   </a> 
	        <?php
            endif;
            ?>
            <header class="entry-header">
                <a href="<?php the_permalink(); ?>">
                    <h2 class="entry-title"><?php the_title(); ?></h2>
                </a>    
            </header>
            <div class="entry-content">
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Czytaj dalej...</a>
            </div>
        </article>
        <?php
    endwhile;
endif;

?>



<?php get_footer(); ?>