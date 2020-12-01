<?php
global $impackd;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="google-site-verification" content="MzDKEKgFTVkzglE2ij6RCEoKoQ7yRa9608EuS4ZaYaw" />
	<script src="https://cdn-in.pagesense.io/js/mashummollah/8a20bf66d8a94d9ea86dd3cc0224fac3.js"></script>
    <meta name="p:domain_verify" content="0592bbee40cf3a30b4b8431e67216209"/>
    <!-- <meta name="title" content="Blog" />
      <meta name="description" content="Page description. No longer than 155 characters." /> -->

    <!-- Twitter Card data -->
    <!-- <meta name="twitter:card" value="summary" /> -->

    <!-- Open Graph data -->
    <!-- <meta property="og:title" content="Blog title" />
      <meta property="og:type" content="article" />
      <meta property="og:url" content="http://www.example.com/" />
      <meta property="og:image" content="http://localhost/blog_new/wp-content/uploads/2019/09/logo_png_transparent_814286.png" />
      <meta property="og:description" content="Description Here" />

    <title><?php //echo get_bloginfo( 'name' ); 
            ?></title> -->

    <?php if (!empty($impackd['favicon']['url'])) { ?>
        <link rel="icon" href="<?php echo $impackd['favicon']['url']; ?>" />
    <?php } /* ?>
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" />
    <?php if(is_single()) { ?>
        <link href="<?php echo get_template_directory_uri(); ?>/css/single-page.css" rel="stylesheet" />
    <?php } */ ?>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/og-image.png" />
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/images/og-image.png" />
    <meta name="twitter:site" content="@mashum_mollah" />
    
    <?php
    // including scss compiler
    // https://scssphp.github.io/scssphp/docs/

    require_once 'libs/scssphp-1.0.4/scss.inc.php';

    use ScssPhp\ScssPhp\Compiler;

    function getCSS($files)
    {
        try {
            $scss = new Compiler();
            // $scss->setImportPaths('css/');

            $scssContent = "";

            foreach ($files as $file) {
                $scssContent .= file_get_contents($file);
            }

            // echo "<style clas='log'>/*".$scssContent."*/</style>";

            $css = $scss->compile($scssContent);
            echo "<style class='from-scss'>" . $css . "</style>";
        } catch (\Exception $e) {
            echo '';
            syslog(LOG_ERR, 'scssphp: Unable to compile content');
            // echo "/*".LOG_ERR.'scssphp: Unable to compile content'."*/";
        }
    }
    ?>
    
    <?php wp_head(); ?>

    <?php
    getCSS([
        get_stylesheet_directory_uri() . '/css/common.scss',
        get_stylesheet_directory_uri() . '/css/single-page.scss',
        get_stylesheet_directory_uri() . '/css/style.scss'
        ]);
        // echo "<end-scss/>";
    ?>

    <script src="https://clientcdn.pushengage.com/core/1d752d586d808504c2c7fdff06c8fd15.js"></script>
    <script>
        _pe.subscribe();
    </script>
</head>

<body <?php body_class(); ?>>

    <a id="goto-top-button">➤</a>

    <header id="top-nav">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container logo-sec">
                <a href="<?php echo home_url('/'); ?>" title="<?php echo get_bloginfo('name'); ?>">
                    <?php
                    if (!empty($impackd['logo']['url'])) {
                        echo '<img alt="Mashum Mollah logo" src="' . esc_url($impackd['logo']['url']) . '">';
                    } else {
                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                    }
                    ?>
                    <span class="sr-only">Go to Home Page</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
                            <path class="line top" d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                            <path class="line middle" d="m 30,50 h 40" />
                        </svg>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php wp_nav_menu(array('theme_location' => 'top', 'container' => 'ul', 'menu_class' => 'navbar-nav')); ?>

                    <ul class="header-social-links">
						
                        <?php 
						if (!empty($impackd['facebook_url'])) { ?>
                            <li class="facebook">
                                <a href="<?php echo esc_url($impackd['facebook_url']); ?>" target="_blank" rel="nofollow"><i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                        <?php }
						if (!empty($impackd['twitter_url'])) { ?>
                            <li class="twitter">
                                <a href="<?php echo esc_url($impackd['twitter_url']); ?>" target="_blank" rel="nofollow"><i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                        <?php }
						if (!empty($impackd['linkedin_url'])) { ?>
                            <li class="liked-in">
                                <a href="<?php echo esc_url($impackd['linkedin_url']); ?>" target="_blank" rel="nofollow"><i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>
                        <?php }
						if (!empty($impackd['instagram_url'])) { ?>
                            <li class="youtube">
                                <a href="<?php echo esc_url($impackd['instagram_url']); ?>" target="_blank" rel="nofollow"><i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                        <?php }
                        
                        
                         ?>
														
                    </ul>

                    <div class="my-search">
                        <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>" id="new-search-form" style="display:none;">
                            <input type="search" id="search-input" class="form-control search-field" placeholder="Search..." value="" name="s">
                        </form>
                        <div id="new-search">
                            <i class="fa fa-search" class="new-search-icon" id="search-icon" aria-hidden="true"></i>
                        </div>
                    </div>

                    <!-- <ul class="navbar-nav ml-auto">
                <li class="nav-link"><a href="#">About</a></li>
                <li class="nav-link"><a href="#">Portfolio</a></li>
                <li class="nav-link"><a href="#">Blog</a></li>
                <li class="nav-link"><a href="#">Contact</a></li>
              </ul> -->
                </div>
            </div>
        </nav>
    </header>