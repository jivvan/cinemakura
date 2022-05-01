<?php
$heading = get_post_meta(get_the_ID(), 'heading', true);
$description = get_post_meta(get_the_ID(), 'description', true);
$author =  get_the_author();
$date = get_the_date();
?>
<a href="<?php the_permalink(); ?>">
    <div class="discussion-card">
        <div>
            <?php echo get_avatar( get_the_author(),24); ?> 
            <div class="inline">
                <span class="author-name"><?php echo $author?></span>
                <span><?php echo $date?></span>
            </div>
    </div>
    <h4><?php echo $heading?></h4>
    <p><?php echo substr($description,0,200)?></p>
</div>
</a>