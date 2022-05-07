<!-- The fields for discussion post type are:
    1. Heading - plain text
    2. Description - pain paragraph text
    3. Score - plain number (Score is total result of all upvotes and downvotes for discussion. I am thinking of ditching this feature for now. k garne vana?)
    4. Rating - plain number (Rating that author of discussion gave to movie (value ranges from 0-5))
    5. Movie - plain number (ID of the associated movie)
-->

<?php get_header(); ?>

<?php $heading =  get_post_custom_values('heading')[0];
$description = get_post_custom_values('description')[0];
$movie =  get_post_custom_values('movie')[0];
$score =  get_post_custom_values('score')[0];
$rating =  get_post_custom_values('rating')[0];
$author =   get_the_author_meta('display_name',get_post_field( 'post_author' ,get_the_ID() ));
?>
<!-- TODO: Yo page ma single discussion hunchha. Maile kei variables haru declare garya chhu. Eslai ramrari present garne. 
comment haru afai enabled chha. Comments ko template lai pani style garnu. Ani author ko info chai kasari tanne herera tanera tyo ni
display garnu parla.
-->
<div class="container discussionPage">
    <h2><?php echo $heading;?></h2>
    <h7>Author: <?php echo $author;?></h7>
    
    <div class="rating-container">
    
            <div class="rate">
                <input type="radio" disabled id="star5" name="rate" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio"disabled id="star4" name="rate" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" disabled id="star3" name="rate" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" disabled id="star2" name="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" disabled id="star1" name="rate" value="1" />
                <label for="star1" title="text">1 star</label>
            </div>
           
        </div>
        <p  class="desc"><?php echo $description;?><p><hr>
        
<?php 
if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;
?>

</div>
<?php get_footer() ?>

<script>
   let ratingEl=document.getElementsByName('rate')
   ratingEl[<?php echo 5-$rating;?>].checked = true
</script>