<!-- 
    Use this link to see how to display values for custom fields
    https://wordpress.org/support/article/custom-fields/

    The movie post type is:
    movie_name: string
    synopsis: string
    release_date: date
    director: string
    dop: string
    cast: string
    poster: image
 -->

<?php get_header(); ?>
<?php $movie_name =  get_post_custom_values('movie_name')[0];
$synopsis = get_post_custom_values('synopsis')[0];
$director =  get_post_custom_values('director')[0];
$release_date =  get_post_custom_values('release_date')[0];
$dop =  get_post_custom_values('dop')[0];
$cast =  get_post_custom_values('cast')[0];
$poster =  get_post_custom_values('poster')[0];
?>
<div class="container my-2 m-auto">
    <!-- movie info -->
    <h2 class="text-3xl my-2">
        <?php echo $movie_name; ?>
    </h2>
    <div class="flex space-x-8">
        <div class="flex w-max flex-col justify-center items-center">
            <div class="max-w-xs">
                <?php echo pods_image($poster, 'default'); ?>
            </div>
        </div>
        <div class="max-w-[70%] flex flex-col space-y-2">
            <p class="bg-slate-300 rounded p-2"><?php echo $synopsis ?></p>
            <p class="font-semibold">Director: <?php echo $director ?></p>
            <p class="font-semibold">Director of Photography (DOP): <?php echo $dop ?></p>
            <p class="font-semibold">Cast: <?php echo $cast ?></p>
        </div>
    </div>
    <?php
    $args = array(
        'post_type'=>'discussion',
        'meta_query' => array(
            array(
                'key'     => 'movie',
                'value'   => get_the_ID(),
            ),
        ),
    );

    // The Query
    $the_query = new WP_Query($args);

    // The Loop
    if ($the_query->have_posts()) {
        echo '<h2>Related Discussions</h2>';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            get_template_part('template-parts/discussion-card');
        }
    } else {
        // no posts found
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    ?>
</div>
<?php get_footer() ?>