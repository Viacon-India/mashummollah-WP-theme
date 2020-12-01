<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Impackd
 * @since Impackd 1.0
 */


get_header();
global $impackd;
?>

<div class="error-message">
    <div class="container">
        <!-- <img src="<?php echo esc_url($impackd['logo']['url']); ?>" alt="" /> -->
        <h2 class="error-code">404</h2>
        <h3 class="info">Page Not Found</h3>
        <!-- <div class="back-home"><a class="btn-subtle" href="<?php echo site_url() . ''; ?>">Back to Home</a></div> -->
        <a class="blue-butn" href="<?php echo site_url() . ''; ?>">Go to Home</a>
    </div>
</div>


<?php get_footer(); ?>