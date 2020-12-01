<?php
/*
 * Template Name: Contact Template
 */
get_header();
global $impackd;
?>
   

    <div class="about">
      <div class="container">
        <div class="row">
          <div class="col-md-6 about-text">
            <h1><span>Entrepreneur. SEO Expert.</span></h1>
            <p>
              Apparently we had reached a great he Apparently we had reached a
              great height in the atmosphere, for the sky was Apparently we had
              ight in the reached a great height in the atmosphere, for the sky
              was ight in the atmosphere, for the sky was Apparently we had
              reached a great he Apparently we had reached a great height in the
              atmosphere, for the sky was Apparently we had reached a great
              height in the atmosphere, for the sky was ight in the
            </p>
	    <a href="<?php echo home_url('/about-me'); ?>" class="blue-butn" rel="">About Me</a>
            
          </div>
          <div class="col-md-6">
          	<div class="contact-page-form">
            		<?php echo do_shortcode('[contact-form-7 id="21" title="Contact form 1"]'); ?>
            	</div>
          </div>
        </div>
      </div>
    </div>

   

<?php
get_footer();
