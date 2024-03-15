<?php
get_header();
?>
<div class="contmain"> 
        <aside>
            <div class="mn">
        <p><i class="fa fa-long-arrow-left"></i> &nbsp;Admin Dashboard</p>
        <?php dynamic_sidebar('sidebar') ?>
    </div>
        <div class="spacee"></div>
    </aside>
    <div class="onlyp" style="margin: 10px; width: 80%;">
<h2> <?php the_title() ?> </h2>
<?php the_content();
// $page_id = 7;

// $page_content = get_post_field('post_content', $page_id);

// preg_match_all('/<p.*?(.*?)<\/p>/i', $page_content, $paragraph_matches);
// preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $page_content, $image_matches);

// $paragraph_count = count($paragraph_matches[0]);
// $image_count = count($image_matches[1]);

// for ($i = 0; $i < max($paragraph_count, $image_count); $i++) {
// foreach ($paragraph_matches[0] as $paragraph) {
//     echo $paragraph . '<br>';
//     // Display two images for each paragraph
//     if ($image_count >= 2) {
//         echo '<img src="' . esc_url($image_matches[1][$i]) . '" alt="Page Image" style="width: 300px; height: 300px; margin: 5px;">';
//         echo '<img src="' . esc_url($image_matches[1][$i + 1]) . '" alt="Page Image" style="width: 300px; height: 300px; margin: 5px;"><br>';
//         $i += 2; 
//     }
// }
// }
?>

</div>
</div>
<?php
get_footer();
?>
 