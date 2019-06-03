<?php
// Template 1 - post-final-1.psd - featured image float left
//get the global sidebar position from td_single_template_vars.php

locate_template('includes/wp_booster/td_single_template_vars.php', true);

get_header();

global $loop_sidebar_position, $td_sidebar_position, $post;

$td_mod_single = new td_module_single($post);

?>
<div class="td-main-content-wrap td-container-wrap">

                            <?php
                            locate_template('loop-single-expert.php', true);
                            ?>

</div>

<?php

get_footer();
