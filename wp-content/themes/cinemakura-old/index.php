<?php get_header(); ?>

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

    <!-- Search bar Rayan le garda thik hola! -->

    <!-- TODO: create and style movie carousal -->
    <div class="d-flex flex-row justify-content-start">
        <?php if ($posts) {
            foreach ($posts as $post) :
            setup_postdata($post); ?>
            <?php
            $movie_name = get_post_meta(get_the_ID(), 'movie_name', true);
            $release_date =  get_post_meta(get_the_ID(), 'release_date', true);
            $poster =  get_post_meta(get_the_ID(), 'poster', true);
            ?>
            <a href="<?php the_permalink(); ?>">
            <div>
                <div class="w-25">
                    <?php echo pods_image($poster, 'default'); ?>
                </div>
                <p><?php echo $movie_name; ?></p>
            </div>
            </a>
            <?php the_content(); ?>
            <?php
        endforeach;
        wp_reset_postdata();
    }
    ?>
</div>
    <!-- movie carousal Sandesh le garda thik hola! Maile halka setup gardya chhu -->
    
    <!-- TODO: create and style discussion board -->
</div>
<?php get_footer(); ?>