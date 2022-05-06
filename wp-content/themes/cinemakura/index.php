<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cinemakura
 */

get_header();
?>




<?php
$args = array(
    'numberposts' => 10,
    'post_type'   => 'movie',
    'order'       => 'DESC',
    'orderby'     => 'release_date'
);
$posts = get_posts($args);
?>

<div class="container m-auto">
    <!-- TODO: create and style search bar -->
    <?php get_template_part('template-parts/search_bar'); ?>
    
    <div class="d-flex pt-5 flex-row justify-content-start">
        <?php get_template_part('template-parts/carousel'); ?>
    </div>

    <?php
    $args = array(
        'numberposts' => 10,
        'post_type'   => 'discussion',
    );
    $posts = get_posts($args);
    ?>


    <!--post starts here(top discussion) -->
    <div class="heading1">
        <h3><i>Top discussions</i></h3>
    </div>
    <div class="main container flex-column m-auto">

        <?php if ($posts) {
            foreach ($posts as $post) :
                setup_postdata($post); ?>
                <?php

                $heading = get_post_meta(get_the_ID(), 'heading', true);
                $description = get_post_meta(get_the_ID(), 'description', true);


                ?>
                <a class="link" href="<?php the_permalink(); ?>">

                    <div class="flex_item top_discussion">
                        <div class="title">
                            <h2> <?php echo $heading ?></h2>
                        </div>
                        <div class="descri">
                            <?php echo $description ?>
                        </div>
                        <button type="button" class="discussion_button">View Discussion</button>
                    </div>
                </a>
        <?php
            endforeach;
            wp_reset_postdata();
        }
        ?>
    </div>
</div>
<?php
get_footer();
