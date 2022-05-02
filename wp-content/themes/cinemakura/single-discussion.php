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
?>
<!-- TODO: Yo page ma single discussion hunchha. Maile kei variables haru declare garya chhu. Eslai ramrari present garne. 
comment haru afai enabled chha. Comments ko template lai pani style garnu. Ani author ko info chai kasari tanne herera tanera tyo ni
display garnu parla.

@utsab_singh le garxau yo dost?
-->
<?php
echo $heading;
echo $description;
echo $movie;
echo $score;
echo $rating;
?>

<?php 
if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;
?>

<?php get_footer() ?>