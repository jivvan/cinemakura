<!-- 
    Use this link to see how to display values for custom fields
    https://wordpress.org/support/article/custom-fields/

    The movie post type is:
    movie_name: string
    release_date: date
    director: string
    dop: string
    cast: string
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
    <!-- comments -->
    <?php
    $comments = get_comments( array( 'post_id' => get_the_ID() ) );
 
    foreach ( $comments as $comment ) :
        echo $comment->comment_content;
    endforeach;
    ?>
</div>
<?php get_footer() ?>