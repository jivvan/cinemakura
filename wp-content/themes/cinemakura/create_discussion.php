<?php
/*
Template Name: Create_Discussion
*/
?>
<title>
    Create a discussion | Cinemakura
</title>

<?php get_header(); ?>

<form class="container" id="new_post" name="new_post" method="post" action="<?php bloginfo('template_directory'); ?>/post-process.php">
    <h3 class="py-2">Create a discussion</h3>
    <input type="hidden" name="post_type" value="discussion" />
    <input required type="hidden" name="userid" value="" />
    <div class="mt-2">
        <label for="title">Title</label>
        <input required type="text" name="title">
    </div>
    <div class="mt-2">
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <div class="mt-2">
        <label for="rating">Give your rating</label>
        <div class="rating-container">
            <div class="rate">
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="text">1 star</label>
            </div>
        </div>
    </div>
    <div>
        <label for="s">Movie</label>
        <input type="text" id="movie_name" value="" data-swplive="true" /> <!-- data-swplive="true" enables SearchWP Live Search -->
        <input type="text" hidden name="movie" id="movie_id" value="">
    </div>
    <?php wp_nonce_field('new-post'); ?>
    <button class="mt-2">Create Discussion</button>
</form>

<?php get_footer(); ?>