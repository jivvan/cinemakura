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
<!-- TODO: create and style search bar -->
<?php get_template_part('template-parts/search_bar'); ?>
<!-- Search bar Rayan le garda thik hola! -->

<!-- TODO: create and style movie carousal -->
<div class="d-flex pt-5 flex-row justify-content-start">
    <?php get_template_part('template-parts/carousel'); ?>
</div>
<!-- movie carousal Sandesh le garda thik hola! Maile halka setup gardya chhu -->

<!-- TODO: create and style discussion board -->
</div>

<?php
get_sidebar();
get_footer();
?>