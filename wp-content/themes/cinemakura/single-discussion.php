<?php get_header(); ?>

<?php $heading =  get_post_custom_values('heading')[0];
$description = get_post_custom_values('description')[0];
$movie =  get_post_custom_values('movie')[0];
$score =  get_post_custom_values('score')[0];
$rating =  get_post_custom_values('rating')[0];
?>

<?php
echo $heading;
echo $description;
echo $movie;
echo $score;
echo $rating;
?>

<?php get_footer() ?>