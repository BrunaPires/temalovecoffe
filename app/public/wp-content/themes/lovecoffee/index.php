<?php get_header(); ?>

<!-- Page content -->

<div class="content">

    <?php
    if (have_posts()){
        while (have_posts()) {
            the_post();
            the_content();
        }
    }

    ?>

</div>


<?php get_footer(); ?>