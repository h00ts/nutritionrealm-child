<?php
/* Template Name: Experts */

get_header();

$template_id = 'experts';

$td_enable_or_disable_page_comments = td_util::get_option('tds_disable_comments_pages');
?>

<div class="nr_expert_stripe" style="background-image: url('https://www.nutritionrealm.com/wp-content/uploads/2019/05/bg-1-1.jpg'); background-position: center bottom;" data-aos="fade">
<div class="nr_expert_wrap">
<div class="nr_expert_column-50">
<div class="nr_expert_content rellax" data-rellax-speed="-1" data-aos="fade-left">

<h1 style="margin-top:1em;max-width:528px">Our Team of <strong style="color:#3FC1BF">Experts</strong></h1>
<p style="max-width: 600px; margin: 0;">Meet our team of experts who are passionate about health, fitness, and making a difference in your life. With their help, we are able to provide you with the most accurate, factual, and relevant information on a wide range of health topics.</p>
<!--<a href="#" class="nr_expert_cta" style="margin-left:0;margin-right:0;">ASK A NUTRITIONIST</a>-->
</div>
</div>
<div class="nr_expert_column-50"></div>
</div>
</div>
            <div class="td-main-content-wrap td-main-page-wrap td-container-wrap">
                <div class="<?php if (!td_util::tdc_is_installed()) { echo 'td-container '; } ?>tdc-content-wrap">
                    <div class="experts-wrap">
                        <?php
                        $args = array( 'post_type' => 'nr_experts', 'posts_per_page' => -1 );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                        $linkedin = get_field('linkedin');
                        $facebook = get_field('facebook');
                        $instagram = get_field('instagram');
                        $website = get_field('website');
                        ?>
                            <div class="single-expert">
                                <div class="single-expert-img">
                                    <img src="<?php the_field('profile_pic') ?>" alt="<?php the_title(); ?>">
                                </div>
                                <div class="single-expert-content-wrap">
                                    <div class="single-expert-content">
                                        <div class="expert-social-links">
                                        <?php
                                            if($linkedin != ''){
                                        ?>
                                            <a href="<?php the_field('linkedin'); ?>" target="_blank" class="expert-icon icon-linkedin"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn icon</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
                                        <?php
                                            }
                                            if($facebook != ''){
                                        ?>
                                            <a href="<?php the_field('facebook'); ?>" target="_blank" class="expert-icon icon-facebook"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook icon</title><path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"/></svg></a>
                                        <?php
                                            }
                                            if($instagram != ''){
                                        ?>
                                        <a href="<?php the_field('instagram'); ?>" target="_blank" class="expert-icon icon-instagram"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram icon</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg></a>
                                        <?php
                                            }
                                            if($website != ''){
                                        ?>
                                        <a href="<?php the_field('website'); ?>" target="_blank" class="expert-icon icon-website"><svg role="img" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg"><title>Hyperlink</title><path d="M14.982,7C14.736,3.256,11.744,0.263,8,0.017V0H7.5H7v0.017C3.256,0.263,0.263,3.256,0.017,7H0v0.5V8h0.017C0.263,11.744,3.256,14.736,7,14.982V15h0.5H8v-0.018c3.744-0.246,6.736-3.238,6.982-6.982H15V7.5V7H14.982z M4.695,1.635C4.212,2.277,3.811,3.082,3.519,4H2.021C2.673,2.983,3.599,2.16,4.695,1.635z M1.498,5h1.758C3.122,5.632,3.037,6.303,3.01,7H1.019C1.072,6.296,1.238,5.623,1.498,5z M1.019,8H3.01c0.027,0.697,0.112,1.368,0.246,2H1.498C1.238,9.377,1.072,8.704,1.019,8z M2.021,11h1.497c0.292,0.918,0.693,1.723,1.177,2.365C3.599,12.84,2.673,12.018,2.021,11z M7,13.936C5.972,13.661,5.087,12.557,4.55,11H7V13.936z M7,10H4.269C4.128,9.377,4.039,8.704,4.01,8H7V10z M7,7H4.01c0.029-0.704,0.118-1.377,0.259-2H7V7z M7,4H4.55C5.087,2.443,5.972,1.339,7,1.065V4z M12.979,4h-1.496c-0.293-0.918-0.693-1.723-1.178-2.365C11.4,2.16,12.327,2.983,12.979,4z M8,1.065C9.027,1.339,9.913,2.443,10.45,4H8V1.065z M8,5h2.73c0.142,0.623,0.229,1.296,0.26,2H8V5z M8,8h2.99c-0.029,0.704-0.118,1.377-0.26,2H8V8z M8,13.936V11h2.45C9.913,12.557,9.027,13.661,8,13.936z M10.305,13.365c0.483-0.643,0.885-1.447,1.178-2.365h1.496C12.327,12.018,11.4,12.84,10.305,13.365z M13.502,10h-1.758c0.134-0.632,0.219-1.303,0.246-2h1.99C13.928,8.704,13.762,9.377,13.502,10z M11.99,7c-0.027-0.697-0.112-1.368-0.246-2h1.758c0.26,0.623,0.426,1.296,0.479,2H11.99z"/></svg></a>
                                        <?php
                                            }
                                        ?>
                                        </div>
                                        <h3><?php the_title(); ?></h3>
                                        <h4><?php the_field('credentials'); ?></h4>
                                        <p><?php the_content(); ?></p>
                                        <!--<p><a href="#">Read More ≫</a></p>-->
                                        <a href="<?php the_permalink() ?>" class="nr_expert_cta">View Reviewed Articles</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="nr_expert_stripe" style="background-image: url('https://www.nutritionrealm.com/wp-content/uploads/2019/05/bg-6.jpg'); background-position: center bottom;" data-aos="fade">
<div class="nr_expert_wrap">
<div class="nr_expert_column-50">
<div class="nr_expert_content rellax" data-rellax-speed="-1" data-aos="fade-left">

<h1 style="margin-top:1em;max-width:528px">ASK OUR <strong style="color:#3FC1BF">Experts</strong></h1>
<p style="max-width: 600px; margin: 0;">Whether you’re looking to improve your daily nutrition, stay active, or make small, everyday changes - our team of experts has you covered.</p>
<!--<a href="#" class="nr_expert_cta" style="margin-left:0;margin-right:0;">ASK A NUTRITIONIST</a>-->
</div>
</div>
<div class="nr_expert_column-50"></div>
</div>
</div>
<?php
get_footer();
