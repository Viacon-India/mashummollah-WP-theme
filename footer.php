<?php global $impackd; ?>
<footer class="last-footer">

    <div class="container">
        <div class="row">
            <div class="col-md-3 fotr-menu-sec">
                <!-- <img style=" padding: 0; margin-bottom:20px; width: 80px;" src="<?php //echo $impackd['logo']['url']; 
                                                                                        ?>"/> -->
                <!-- <p><?php echo $impackd['footer_text']; ?></p> -->
                <h5>Top Links</h5>
                <?php wp_nav_menu(array('theme_location' => 'secondary_menu')); ?>
            </div>

            <div class="col-md-3 fotr-menu-sec">
                <h5>My Companies</h5>
                <?php wp_nav_menu(array('theme_location' => 'companies_menu')); ?>
            </div>

            <div class="col-md-2 social-icon fotr-menu-sec">
                <h5>Social Links</h5>
                <ul>
                    <?php if (!empty($impackd['facebook_url'])) { ?>
                        <li><a href="<?php echo esc_url($impackd['facebook_url']); ?>" target="_blank"> Facebook</a></li>
                    <?php }
                    if (!empty($impackd['twitter_url'])) { ?>
                        <li><a href="<?php echo esc_url($impackd['twitter_url']); ?>" target="_blank"> Twitter</a></li>
                    <?php }
                    if (!empty($impackd['linkedin_url'])) { ?>
                        <li><a href="<?php echo esc_url($impackd['linkedin_url']); ?>" target="_blank"> Linkedin</a></li>
                    <?php }
                    if (!empty($impackd['instagram_url'])) { ?>
                        <li><a href="<?php echo esc_url($impackd['instagram_url']); ?>" target="_blank"> Instagram</a></li>
                    <?php } ?>
            </div>

            <div class="col-md-4 Subscribe-btn">
                <h5>Newsletter</h5>
                <ul class="footer-subscribe">
                    <li>
                        <script async data-uid="35958920df" src="https://fantastic-knitter-3728.ck.page/35958920df/index.js"></script>
                    </li>
                </ul>

            </div>
        </div>
    </div>

</footer>


</div>
</div>
<?php wp_footer(); ?>

<script>
    jQuery(document).ready(function($) {
		
		$('#new-search').on('click', function() {
			$('#menu-main').toggle(2000);
			$('.header-social-links').toggle(2000);
			 $("#new-search-form").toggle(2000);
		});

		$('#menu-main li:last-child').addClass('subscribe-btn');
		
        $("#new-search").on("click", function() {
           
        });
        
        
        /***************** Alt Text **********************/
        let images = document.getElementsByTagName("img");

        for (var i = 0; i < images.length; i++) addAlt(images[i]);
        
        //adds alt value from file name
        function addAlt(el) {
            if(el.getAttribute("alt")) return;
            
            url = el.src;
            let filename = url.substring(url.lastIndexOf("/") + 1);
            filename = filename
              .split(".")
              .slice(0, -1)
              .join(".");
            
            //console.log(filename);
            
            el.setAttribute("alt", filename);
            console.log("added alt: " + filename);
        }

    });
</script>

<!-- <script
src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
crossorigin="anonymous"
></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
crossorigin="anonymous"
></script>
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
crossorigin="anonymous"
></script>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
<script src="<?php //echo get_template_directory_uri(); 
                ?>/js/script.js"></script> -->
</body>

</html>