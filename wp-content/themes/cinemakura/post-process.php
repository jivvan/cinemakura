
<?php
/**
 * post-process.php
 * make sure to include post-process.php in your functions.php. Use this in functions.php:
 *
 * get_template_part('post-process');
 *
 */
require(dirname(dirname(dirname(__DIR__))) . '/wp-load.php');
function do_insert()
{
    if ($_POST['post_type'] == 'discussion') { // Check what the post type is here instead
        // Setting the 'post_type' => $_POST['post_type'] in the $post array below causes 404
        // Just set it based on what is set in the above IF $_POST type == 'book'. 
        // and below do 'post_type' => 'book'

        // Do some minor form validation to make sure there is content
        if (isset($_POST['title'])) {
            $title =  $_POST['title'];
        } else {
            echo 'Please enter a title';
            return;
        }
        if (isset($_POST['description'])) {
            $description = $_POST['description'];
        } else {
            echo 'Please enter the content';
            return;
        }
        if (isset($_POST['rate'])) {
            $rating = $_POST['rate'];
        } else {
            echo 'Please rate the movie';
            return;
        }
        if (isset($_POST['score'])) {
            $score = $_POST['score'];
        } else {
            $score = 0;
        }
        if (isset($_POST['movie'])) {
            $movie = $_POST['movie'];
        } else {
            echo 'Please enter name of the movie';
            return;
        }


        // Add the content of the form to $post as an array
        $post = array(
            'post_title'    => $title,
            'post_content'    => $description,
            'post_status'    => 'publish', // Choose: publish, preview, future, etc.
            'post_type'        => 'discussion' // Set the post type based on the IF is post_type X
        );
        $pid = wp_insert_post($post);  // Pass  the value of $post to WordPress the insert function

        //we now use $pid (post id) to help add out post meta data
        add_post_meta($pid, 'heading', $title, true);
        add_post_meta($pid, 'description', $description, true);
        add_post_meta($pid, 'rating', $rating, true);
        add_post_meta($pid, 'score', 0, true);
        add_post_meta($pid,'movie',$movie,true);
        
        header("Location: /cinemakura");
        die();
        // http://codex.wordpress.org/Function_Reference/wp_insert_post
    } // end IF
}
do_insert();
// Do the wp_insert_post action to insert it
do_action('wp_insert_post', 'do_insert');
