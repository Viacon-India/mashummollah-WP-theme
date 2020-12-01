<?php
/*
 * Template Name:Home Template
 */
get_header();
global $impackd;
?>

<?php
$_home_who_heading = get_post_meta(get_the_ID(), '_home_who_heading', true);
$_home_who_short_desc = get_post_meta(get_the_ID(), '_home_who_short_desc', true);

$_home_program_details_page_dropdown = get_post_meta(get_the_ID(), '_home_program_details_page_dropdown', true);

?>

<div class="banner">
    <div class="container">
        <div class="banner-content">
            <h1>Exclusive Digital Marketing Advice for Enterprenuers</h1>
            <p>
                Enter your email below to get access to my proven digital marketing tips and strategies
            </p>

            <ul>
                <li>
                    <?php //echo do_shortcode('[convertkit form=1096431]'); ?>
                    <script async data-uid="35958920df" src="https://fantastic-knitter-3728.ck.page/35958920df/index.js"></script>
                </li>
            </ul>

        </div>
        <!-- </div>

      <div class="container"> -->
        <div class="logo-ban">

            <?php global $post;
            $seen_arr = get_posts(array('post_type' => 'seen_on', 'posts_per_page' => -1, 'order' => 'DESC'));
            foreach ($seen_arr as $posts) : setup_postdata($posts); ?>
                <?php $image_id = get_post_thumbnail_id($posts->ID, 'home-page-testimonial'); ?>
                <a href="#"> <span class="sr-only"><?php echo get_the_title( $image_id); ?></span>
                <?php echo get_the_post_thumbnail($posts->ID, 'home-page-testimonial'); ?> </a>

            <?php endforeach;
            wp_reset_postdata(); ?>

        </div>
    </div>
</div>

<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-8 about-text">
                <h2><span>Entrepreneur. Digital Marketing Expert.</span></h2>
                <p>
                    Mashum Mollah is a Tech Entrepreneur, Digital Marketing Expert and Founder of Viacon, Blogger Outreach, and many more tech platforms. He is on a mission to help small businesses grow online. He shares his journey, insights and experiences at MASHUMMOLLAH.com. If you are an entrepreneur, digital marketing professional, or simply an info-holic, then this blog is for you. Follow him on the social media.
                </p>
                <div class="actions">
                    <a href="<?php echo home_url(); ?>/about-me/" class="blue-butn" rel="">About Us</a>
                    <a href="<?php echo home_url(); ?>/contact-me/" class="blue-butn-outline" rel="">Contact Me</a>
                </div>

            </div>
            <div class="col-md-4">
                <ul class="social-link-group">
                    <?php if (!empty($impackd['instagram_url'])) { ?>
                        <li class="instagram">
                            <a href="<?php echo esc_url($impackd['instagram_url']); ?>" target="_blank" rel="nofollow">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/instagram-brands.svg" alt="insta-logo" />
                                <span class="sr-only">Instagram</span></a>
                        </li>
                    <?php }
                    if (!empty($impackd['linkedin_url'])) { ?>
                        <li class="liked-in">
                            <a href="<?php echo esc_url($impackd['linkedin_url']); ?>" target="_blank" rel="nofollow">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin-in-brands.svg" alt="Linkedin-logo" /></a>
                        </li>
                    <?php }
                    if (!empty($impackd['twitter_url'])) { ?>
                        <li class="twitter">
                            <a href="<?php echo esc_url($impackd['twitter_url']); ?>" target="_blank" rel="nofollow">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/twitter-brands.svg" alt="twitter-logo" /></a>
                        </li>
                    <?php }
                    if (!empty($impackd['facebook_url'])) { ?>
                        <li class="facebook">
                            <a href="<?php echo esc_url($impackd['facebook_url']); ?>" target="_blank" rel="nofollow">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-f-brands.svg" alt="facebook-logo" /></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- <div class="work">
      <div class="container">
        <div class="row">
          <div class="col-md-1"></div>

          <div class="col-md-4">
            <div class="round">
              <img src="<?php echo get_template_directory_uri(); ?>/images/work-men.svg" alt="happy person graphic" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="work-text">
              <h4>Apparently we had reached a great he Apparently</h4>
              <h1>we had reached a <span>great</span></h1>
              <a href="#" class="active blue-butn" rel="">More Courses</a>
            </div>
          </div>

          <div class="col-md-1"></div>
        </div>
      </div>
    </div> -->


<section class="blog-sec" style="background-color: #122aa105;">
    <div class="container">
        <div class="card-bg">
            <h2 class="sec-title">Latest Blogs</h2>
            <ul class="cards">

                <?php global $post;
                $blog_posts = get_posts(array('post_type' => 'post', 'posts_per_page' => 4, 'order' => 'DESC'));
                //print_r($blog_posts);
                foreach ($blog_posts as $posts) : setup_postdata($posts); ?>

                    <li class="cards_item">
                        <div class="card">
                            <div class="card_image"><a href="<?php echo get_the_permalink($posts->ID); ?>"><?php echo get_the_post_thumbnail($posts->ID,'blog-thumbnail'); ?></a></div>
                            <div class="card_content">
                                <h2 class="card_title"><a href="<?php echo get_the_permalink($posts->ID); ?>"><?php echo $posts->post_title; ?></a></h2>
                                <a class="btn card_btn" href="<?php echo get_the_permalink($posts->ID); ?>">Read More</a>
                            </div>
                        </div>
                    </li>

                <?php endforeach;
                wp_reset_postdata(); ?>

            </ul>
            <div class="all-post">
                <!-- <button href="<?php echo home_url('/blog'); ?>"><button class="btn card_btn">Read More</button></a> -->
                <a href="<?php echo home_url('/blog'); ?>" class="btn card_btn">View All Posts</a>
            </div>

        </div>
    </div>
</section>


<!--
<div class="content">
    <h2 class="sec-title">Testimonials</h2>
    <div class="slider single-item">

        <?php /* global $post;
        $testimonial_posts = get_posts(array('post_type' => 'testimonials', 'posts_per_page' => 5, 'order' => 'ASC'));
        foreach ($testimonial_posts as $posts) : setup_postdata($posts); ?>
            
            <div class="quote-container">
                <div class="single-slide">
                    <div class="image-container">
                        <div class="image">
                            <?php echo get_the_post_thumbnail($posts->ID, 'home-page-testimonial'); ?>
                        </div>
                    </div>
                    <div class="text-container">
                        <div class="quote">
                            <blockquote>
                                <p>
                                    <span>“</span>
                                    <?php echo $posts->post_content; ?>
                                </p>
                                <cite>
                                    <span><?php echo $posts->post_title; ?></span>
                                </cite>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach;
        wp_reset_postdata(); */ ?>

    </div>
</div>
-->

<!-- <section class="full-card">
      <div class="container">
        <div class="card-text">
            <h4>Apparently we had reached a great he Apparently </h4>
            <h2>we had reached a <span>great</span></h2>
            <a class="blue-butn" href="#">Work With Us</a>
        </div>
      </div>
    </section> -->




<?php
get_footer();
