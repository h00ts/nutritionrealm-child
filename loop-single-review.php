<?php
/**
 * single Review template
 **/

if (have_posts()) {
    the_post();
    $td_mod_single = new td_module_single($post);
    echo $td_mod_single->get_content();
} else {
    echo td_page_generator::no_posts();
}
