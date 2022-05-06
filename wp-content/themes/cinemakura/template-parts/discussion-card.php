<?php
$heading = get_post_meta(get_the_ID(), 'heading', true);
$description = get_post_meta(get_the_ID(), 'description', true);
$author =  get_the_author();
$date = get_the_date();
?>
<a class="link" href="<?php the_permalink(); ?>">
    <div class="flex_item top_discussion">
        <div style="display: flex; align-items: baseline; flex-wrap: wrap;">
            <?php echo get_avatar(get_the_author(), 24); ?>
            <div class="inline">
                <p><?php echo $author ?></p>
                <p><?php echo $date ?></p>
            </div>
        </div>
        <div class="title">
            <h5> <?php echo $heading ?></h5>
        </div>
        <div class="descri">
            <?php echo strlen($description) < 200 ? $description : substr($description, 0, 150) . "..." ?>
        </div>
        <div style="display: flex; justify-content: end;">
            <button type="button" class="discussion_button">View Discussion</button>
        </div>
    </div>

</a>